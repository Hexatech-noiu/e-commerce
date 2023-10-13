<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Inbox;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
  public function index()
  {
    $status = ['Unpaid', 'Paid', 'Pending Cancel', 'Cancelled', 'Done'];
    if (strtolower(auth()->user()->role) != 'admin') {
      return abort(401);
    }

    $products = Product::orderBy('category_id')->get();
    $category = Category::get();
    $users = User::get();
    $booking = Order::latest()->with('Product')->paginate(5);
    $inbox = Inbox::latest()->take(3)->get();
    $ibx = Inbox::get();
    $inbox_count = Inbox::count();
    $count = [
      [
        'name' => 'Users',
        'total' => count($users),
        'icon' => 'fa-solid fa-user fa-2xl'
      ],
      [
        'name' => 'Products',
        'total' => count($products),
        'icon' => 'fa-solid fa-list-check fa-2xl'
      ],
      [
        'name' => 'Categories',
        'total' => count($category),
        'icon' => 'fa-solid fa-clipboard-list fa-2xl'
      ],
    ];

    if (request("search")) {
      $products = Product::orderBy('category_id')->where('name', 'LIKE', '%' . request('search') . '%')->get();
      $booking = Order::latest()->with('Product')->where('name', 'LIKE', '%' . request('search') . '%')->paginate(5);
    }

    return view('dashboard.index', [
      "title" => "Dashboard",
      "active" => "dashboard",
      "users" => $users,
      "count" => collect($count),
      "categories" => $category,
      "products" => $products,
      "paylist" => ['Debit', 'Credit', 'GoPay', 'ShopeePay', 'Dana', 'OVO'],
      "booking" => $booking,
      "inbox" => $inbox,
      "inbox_count" => $inbox_count,
      "status" => $status
    ]);
  }
}
