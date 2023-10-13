<?php

namespace App\Http\Controllers;

use App\Mail\Invoice;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
  public function index()
  {
    $order = Order::latest()->where('user_id', auth()->user()->id)->paginate(5);
    if (request('search')) {
    $order = Order::latest()->where('user_id', auth()->user()->id)->where('name', 'LIKE', '%' . request('search') . '%')->orWhere('payment_method', 'LIKE', '%' . request('search') . '%')->orWhere('phone', 'LIKE', '%' . request('search') . '%')->paginate(5);

      return view('order', [
        "title" => "Order",
        "active" => "order",
        "order" => $order,
        "sbc" => $order->count()

      ]);
    }

    return view('order', [
      "title" => "Order",
      "active" => "order",
      "order" => $order,
      "sbc" => $order->count()
    ]);
  }


  public function create()
  {

  }

  public function store(Request $request)
  {
    // Benerin phone untuk mencegah vulnerable
    $request['phone'] =  str_replace([" ", ".", "+", "(", ")"], '', $request['phone']);
    $request['status'] =  'Pending';

    // Validasi datanya
    $validated_data = $request->validate([
      "name" => "required",
      "status" => "required",
      "user_id" => "required|exists:users,id",
      "Product_id" => "required|exists:Products,id",
      "date" => "required|date|unique:orders,date",
      "payment_method" => "required",
      "phone" => "required|numeric",
    ]);


    // Format tanggalnya
    $originalDate = new DateTime($validated_data['date']);
    $formattedDate = $originalDate->format('d F Y');

    // return $validated_data;
    Order::create($validated_data);

    // Cari Product Dan User sesuai dengan itunya
    $Product = Product::find($validated_data['Product_id']);
    $user = User::find($validated_data['user_id']);
    $detail = [
      "order_id" => "10",
      "status" => $validated_data['status'],
      "user_name_db" => $user->name,
      "order_name" => $validated_data['name'],
      "subject" => "Your Order from NOIU EO",
      "reply_name" => "NOIU EO",
      "reply_mail" => "laravel@noiu-eo.com",
      "Product_name" => $Product->name,
      "payment_method" => $validated_data['payment_method'],
      "Product_price" => "Rp. " . number_format($Product->price, 0, ',', '.'),
      "Product_desc" => $Product->desc,
      "for_date" => $formattedDate,
    ];

    Mail::to($user->email)->send(new Invoice(collect($detail)));
    return redirect(route('order.index'))->with(['success' => 'Booked successfully. Please check your  email for your invoce, Enjoy!']);

  }

  public function update(Request $request, Order $order)
  {
    $data = $request->validate([
      "name" => "required",
      "phone" => "required|numeric",
      "payment_method" => "required",
      "status" => "required",
      "Product_id" => "required",
      "date" => "date|required"
    ]);


    $Order = Order::find($order->id);
    $Order->update($data);
    $originalDate = new DateTime($data['date']);
    $formattedDate = $originalDate->format('d F Y');

    $detail = [
      "order_id" => $Order->id,
      "user_name_db" => $Order->User->name,
      "order_name" => $data['name'],
      "status" => $data['status'],
      "subject" => "Your Order Has Changed",
      "reply_name" => "NOIU EO",
      "reply_mail" => "laravel@noiu-eo.com",
      "Product_name" => $order->Product->name,
      "payment_method" => $data['payment_method'],
      "Product_price" => "Rp. " . number_format($Order->Product->price, 0, ',', '.'),
      "Product_desc" => $Order->Product->desc,
      "for_date" => $formattedDate,
    ];
    Mail::to($Order->user->email)->send(new Invoice(collect($detail)));
    return redirect()->back()->with(['success' => "Order has been updated successfully"]);
  }


  public function destroy(Order $order)
  {
    Order::destroy($order->id);
    return redirect()->back()->with(['success' => "Order has been deleted successfully"]);
  }

  public function cancel(int $id){
    $order = Order::where('id', $id);
    $order->update(['status'=> 'Pending Cancel']);
    return redirect()->back()->with(['success' => "Cancel order request has been sent to admin"]);
  }
}
