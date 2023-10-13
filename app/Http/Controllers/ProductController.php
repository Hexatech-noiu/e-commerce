<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\SearchProductRequest;

class ProductController extends Controller
{

  public function index()
  {
    if (strtolower(auth()->user()->role) != 'admin') {
      return abort(401);
    }

    if (request('search')) {
      $products = Product::where('name', 'LIKE', '%' . request('search') . '%')->orderBy('category_id')->paginate(5);
      return view('dashboard.products', [
        "title" => "Products | Dashboard",
        "active" => "dashboard",
        "category" => Category::get(),
        "products" => $products
      ]);
    } else {
      $products = Product::orderBy('category_id')->paginate(5);
      return view('dashboard.products', [
        "title" => "Products | Dashboard",
        "active" => "dashboard",
        "category" => Category::get(),
        "products" => $products
      ]);
    }
  }

  public function store(StoreProductRequest $request)
  {
    $request['price'] = str_replace('.', '', $request->price);
    $valData = $request->validate([
      'picture' => 'image|file|mimes:png,jpg,svg,gif,jpeg,webp|max:4096',
      'name' => 'required',
      'desc' => 'required',
      'price' => 'required|numeric',
      'category_id' => 'exists:categorys,id'
    ]);

    if ($request->file('picture')) {
      $valData['picture'] = $request->file('picture')->store('picture', 'public');
    }
    Product::create($valData);
    return redirect()->back()->with(['success' => 'Product created successfully']);
  }
  public function update(UpdateProductRequest $request, Product $product)
  {
    $request['price'] = str_replace(['.', ','], '', $request->price);
    $data = $request->validate(
      [
        'picture' => 'image|file|max:2048|mimes:png,jpg,svg,jpeg,webp',
        'name' => 'required',
        'desc' => 'required',
        'price'  => 'required|numeric',
        'category_id' => 'exists:categorys,id'
      ]
    );

    if ($request->file('picture')) {
      if ($request->oldPicture) {
        Storage::delete($request->oldPicture);
      }
      $data['picture'] = $request->file('picture')->store('picture', 'public');
    }

    Product::where('id', $product->id)->update($data);
    return redirect()->back()->with('success', 'Product has been updated');
  }
  public function destroy(Product $product)
  {
    Product::destroy($product->id);
    return redirect()->back()->with('success', 'Product Has Been deleted sucessfully');
  }

  public function search(SearchProductRequest $request)
  {
    if ($request->has('search')) {
      $product = Category::where('name', 'LIKE', '%' . $request->search . '%')->get();
    } else {
      $product = Category::all();
    }
    return view('dashboard/products', ['products' => $product]);
  }
}
