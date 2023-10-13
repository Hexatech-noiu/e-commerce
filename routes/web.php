<?php

use App\Models\Inbox;
use App\Models\OurTeam;
use App\Models\Package;
use App\Models\Benefits;
use App\Models\Package_type;
use App\Models\Package_category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PackageController;
use App\Http\Requests\SearchPackageRequest;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Package_typeController;
use App\Models\Category;

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

Route::get('/', function () {
  return view('home', [
    "title" => "Beranda",
    "active" => "beranda",
  ]);
})->name('home');

Route::get('/produk', function () {
  $category = Category::with('products')->oldest();
  return view('produk', [
    "title" => "Produk",
    "active" => "produk",
  ]);
})->name('produk');


Route::get('/contact', function () {
  return view('contact', [
    "title" => "Kontak",
    "active" => "kontak",
  ]);
})->name('contact');

Route::get('/dashboard/inbox', function () {
  return view('dashboard.inbox', [
    "title" => "Message",
    "active" => "dashboard",
    "inbox" => Inbox::latest()->paginate(5)
  ]);
});

Route::controller(DashboardController::class)->group(
  function () {
    Route::get('/dashboard', 'index')->middleware('auth');
    // Route::get('/dashboard/packages', 'packages')->middleware('auth');
  }
)->name('dashboard');


Route::controller(UserController::class)->group(function () {
  Route::get('/login', 'login')->middleware('guest')->name('login');
  Route::get('/register', 'register')->middleware('guest');
  Route::post('/register', 'store');
  Route::post('/login', 'authenticate');
  Route::post('/logout', 'logout');
});

Route::post('/send', [InboxController::class, 'store']);
Route::resource('/dashboard/packages', PackageController::class)->middleware('auth');
Route::resource('/dashboard/categories', Package_typeController::class)->middleware('auth');
Route::resource('/dashboard/users', UserController::class)->middleware('auth');
Route::resource('/booking', BookingController::class)->middleware('auth');

Route::get("/email/reply", [MailController::class, 'reply']);

Route::put("/booking/cancel/{Booking:id}", [BookingController::class, 'cancel']);
Route::post("/inbox/reply", [InboxController::class, 'reply']);