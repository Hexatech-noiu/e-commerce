<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;

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
)->name('home');

Route::get(
    '/produk',
    [ProductsController::class, 'index']
)->name('produk_many');

Route::get(
    '/produk/{products:id}',
    [ProductsController::class, 'show']
)->name('produk_one_show');

Route::get(
    '/produk/pesan/{products:id}',
    [ProductsController::class, 'pesan']
)->name('produk_one_pesan');

Route::get(
    '/tabs/{id}',
    [ProductsController::class, 'getCategory']
)->name('get_tabs');


Route::get(
    '/tentang',
    function () {
        return view(
            'tentang',
            [
                "active" => "tentang",
                "title" => "Tentang kami"
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
                "active" => "kontak",
                "tite" => "Kontak"
            ]
        );
    }
);


Route::controller(ProductsController::class)->group(function () {
    Route::get('/dashboard', function () {
        $cats = Category::with('products')->get();
        $cat = Category::with('products')->get();
        if (request('q')) {
            $cat = Category::with('products')
                ->whereHas('products', function ($query) {
                    $query->where('name', 'LIKE', '%' . request('q') . '%');
                })
                ->get();
        }
        return view(
            'dashboard.products',
            [
                'categories' => $cats,
                'category' => $cat,
            ]
        );
    })->name('produk_show')->middleware('auth');
    Route::post('/dashboard/produk', 'store');
    Route::put('/dashboard/produk/{id}', 'update');
    Route::delete('/dashboard/produk/{products:id}', 'destroy');
})->name('dashboard');




Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->middleware('guest')->name('login');
    // Route::get('/register', 'register')->middleware('guest');
    Route::post('/register', 'store');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/preview/{products:id}', [ProductsController::class, 'show']);
Route::post('/send', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'message' => 'required',
    ]);
    $message = "**" . $data['name'] . "(" . $data['email'] . ")** \n" . $data['message'];
    return redirect('https://api.whatsapp.com/send?phone=' . env('PHONE_NUMBER', '111111111111') . '&text=' . urlencode($message) . '&source=&data=');
});
