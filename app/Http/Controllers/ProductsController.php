<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'produk',
            [
                "active" => "beranda",
                "title" => "Beranda",
                'categories' => Category::with('products')->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        dd($products);
    }

    /**
     * Display the specified resource.
     */
    public function pesan(Products $products)
    {
        $message = "Halo kak saya ingin memesan produk.\nNama Produk: $products->name\nHarga Produk: Rp. " . number_format($products->price, 0, ',', '.')."\nURL Produk: " . route('produk_one_show', $products->id);
        return redirect('https://api.whatsapp.com/send?phone='.env('PHONE_NUMBER', '6285156105763').'&text='.urlencode($message).'&source=&data=');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
