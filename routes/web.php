<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes([
    'register' => true,
    'reset' => true,
    'verify' => false,
]);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('views', [AdminController::class, 'views'])->name('admin.views');
    Route::get('catalog', [AdminController::class, 'catalog'])->name('admin.catalog');
    Route::get('orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('income', [AdminController::class, 'income'])->name('admin.income');
});

Route::middleware('auth')->group(function () {
    // Halaman Profil
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    
    // Halaman Change Password
    Route::get('/change-password', [UserController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('password.update');
    
    Route::get('/cart', [CartController::class, 'index'])->name('shop.cart');
    Route::post('/cart/add/{bookId}', [CartController::class, 'addToCart'])->name('shop.addToCart');
    Route::delete('/cart/remove/{itemId}', [CartController::class, 'removeItem'])->name('shop.removeItem');
    Route::get('/order-now', [CartController::class, 'orderNow'])->name('shop.orderNow');

      // Rute untuk melihat daftar pesanan
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    
      // Rute untuk melihat detail pesanan
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
      
      // Rute untuk membuat pesanan
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
      
      // Rute untuk memperbarui status pesanan
    Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/', [HomeController::class, 'index']);
// Route::resource('books', BookController::class)->except(['edit', 'update', 'destroy']);

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.show');
Route::post('/shop/add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('shop.addToCart');
// Route::get('/shop/cart', [ShopController::class, 'cart'])->name('shop.cart');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
