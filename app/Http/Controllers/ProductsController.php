<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    public function index()
    {
        return view(
            'produk',
            [
                "active" => "Kategori",
                "title" => "Kategori",
                'categories' => Category::with('products')->get()
            ]
        );
    }
    public function store(StoreProductsRequest $request)
    {
        $request['price'] = str_replace('.', '', $request->price);

        $valData = $request->validate([
            'picture' => 'image|file|mimes:png,jpg,svg,gif,jpeg,webp|max:4096',
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'exists:categories,id'
        ]);

        if ($request->file('picture')) {
            $valData['picture'] = $request->file('picture')->store('picture', 'public');
        }

        Products::create($valData);
        return redirect()->back()->with(['success' => 'Product created successfully']);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        $request['price'] = str_replace(['.', ','], '', $request->price);

        $data = $request->validate(
            [
                'picture' => 'image|file|max:2048|mimes:png,jpg,svg,jpeg,webp',
                'name' => 'required',
                'desc' => 'required',
                'price'  => 'required|numeric',
                'category_id' => 'exists:categories,id'
            ]
        );
        if ($request->file('picture')) {
            if ($request->oldPicture) {
                Storage::delete($request->oldPicture);
            }
            $data['picture'] = $request->file('picture')->store('picture', 'public');
        }

        Products::where('id', $request->id)->update($data);

        return redirect()->back()->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        Storage::delete($products->picture);
        Products::destroy($products->id);
        return redirect()->back()->with('success', 'Product Has Been deleted sucessfully');
    }

    public function getCategory(Request $req)
    {
        try {
            if (request()->id == 0){
                $categories = Category::with('products')->get();

            }
            $categories = Category::where('id', request()->id)->with('products')->get();

            $view = view('partials.tabs', [
                'categories' => $categories
            ])->render();

            return response()->json([
                'status' => 'success',
                'message' => 'Kategori ditemukan!',
                'view' => $view
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data gagal diambil atau tidak ada',
                'error' => $th->getMessage(),
            ], 400);
        }
    }
    /**
     * Display the specified resource.
     */
    public function pesan(Products $products)
    {
        $message = "Halo kak saya ingin memesan produk.\nNama Produk: $products->name\nHarga Produk: Rp. " . number_format($products->price, 0, ',', '.') . "\nURL Produk: " . route('produk_one_show', $products->id);
        return redirect('https://api.whatsapp.com/send?phone=' . env('PHONE_NUMBER', '6285156105763') . '&text=' . urlencode($message) . '&source=&data=');
    }
}

