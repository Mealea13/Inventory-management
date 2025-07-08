<?php

use App\Http\Controllers\Ui\admin\DashboardController;
use App\Http\Controllers\Ui\admin\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ui\admin\RegisterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [LoginController::class, 'showRegistrationForm'])->name('login');
Route::get('/dashboard', [DashboardController::class , "showRegistrationForm"])->name('dashboard');

Route::view('/product', 'admin.product.product')->name('product');
Route::view('/categories', 'admin.categories.categories')->name('categories');
Route::view('/orders', 'admin.orders.orders')->name('orders');
Route::view('/customers', 'admin.customers.customers')->name('customers');
Route::view('/sales-promotion', 'admin.sales_promotion.sales_promotion')->name('sales_promotion');
Route::view('/inventory', 'admin.inventory.inventory')->name('inventory');
Route::view('/accounts', 'admin.accounts.accounts')->name('accounts');
Route::view('/app', 'admin.app.app')->name('app');
Route::view('/store-locator', 'admin.store_locator.store_locator')->name('store_locator');
Route::view('/ui-components', 'admin.ui_components.ui_components')->name('ui_components');

