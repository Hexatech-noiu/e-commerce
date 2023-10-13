<?php

use App\Http\Controllers\ProductsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    function () {
        return view("beranda", [
            "active" => "beranda",
            "title" => "Beranda"
        ]);
    }
);

Route::get(
    '/produk', [ProductsController::class, 'index']
)->name('produk_many');

Route::get(
    '/produk/{products:id}', [ProductsController::class, 'show']
)->name('produk_one_show');
Route::get(
    '/produk/pesan/{products:id}', [ProductsController::class, 'pesan']
)->name('produk_one_pesan');


Route::get(
    '/tentang',
    function () {
        return view(
            'tentang',
            [
                "active" => "beranda",
                "title" => "Beranda"
            ]
        );
    }
);

Route::get(
    '/kontak',
    function () {
        return view(
            'kontak',
            [
                "active" => "beranda",
                "tite" => "Beranda"
            ]
        );
    }
);
