<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerContoller;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

                          // Admin
Route::get('/', [CustomAuthController::class, 'index'])->name('index');
Route::get('/reg_log', [CustomAuthController::class, 'reg_log'])->name('login_register');
Route::post('/register', [CustomAuthController::class, 'register'])->name('register');
Route::post('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('/carstock', [CustomAuthController::class, 'carstock'])->name('carstock');
Route::get('/addnew', [CustomAuthController::class, 'addnew'])->name('addnew');
Route::post('/admn_search', [PostController::class, 'admn_search'])->name('admn_search');
Route::get('/view_order', [OrderController::class, 'view_order'])->name('view_order');
Route::get('/order_details{id}', [OrderController::class, 'order_details'])->name('order_details');
Route::delete('/delete_order{id}', [OrderController::class, 'delete_order'])->name('delete_order');
Route::post('/search_order', [OrderController::class, 'search_order'])->name('search_order');
Route::get('/editCustomer{id}', [CustomerContoller::class, 'editCustomer'])->name('editCustomer');
Route::post('/updateCustomer{id}', [CustomerContoller::class, 'updateCustomer'])->name('updateCustomer');
Route::delete('/delete_customer{id}', [CustomerContoller::class, 'delete_customer'])->name('delete_customer');
Route::get('/view_customer{id}', [CustomerContoller::class, 'view_customer'])->name('view_customer');
Route::get('/view_comment', [CustomerContoller::class, 'view_comment'])->name('view_comment');
Route::delete('/delete_comment{id}', [CustomerContoller::class, 'delete_comment'])->name('delete_comment');

Route::post('/store', [PostController::class, 'store'])->name('store');

Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name("delete");

Route::get('/edit/{id}', [PostController::class, 'edit'])->name("edit");

Route::post('/update/{id}', [PostController::class, 'update'])->name("update");
Route::post('/update_accessories/{id}', [PostController::class, 'update_accessories'])->name("update_accessories");
Route::post('/update_image/{id}', [PostController::class, 'update_image'])->name("update_image");

Route::delete('/deleteImage/{id}', [PostController::class, 'deleteImage'])->name("deleteImage");

Route::get('/view/{id}', [PostController::class, 'view'])->name("view");

Route::get('/email_view/{id}', [PostController::class, 'email_view'])->name("email_view");

Route::get('/view_car/{id}', [PostController::class, 'view_car'])->name("view_car");

Route::post('/send_email/{id}', [PostController::class, 'send_email'])->name("send_email");

Route::post('/search_car', [PostController::class, 'search_car'])->name("search_car");

Route::get('/download_file/{cover_p}', [PostController::class, 'download_file'])->name("download_file");

Route::get('/download_extra/{image}', [PostController::class, 'download_extra'])->name("download_extra");

// customer
Route::get('/make_view/{make}', [CustomAuthController::class, 'make_view'])->name("make_view");

Route::get('/bodyType/{body}', [CustomAuthController::class, 'bodyType'])->name("bodyType");

Route::get('/view_acc/{aseso}', [CustomAuthController::class, 'view_acc'])->name("view_acc");

Route::get('/location/{loc}', [CustomAuthController::class, 'location'])->name("office");

Route::post('/user_search', [PostController::class, 'user_search'])->name('user_search');

Route::post('/custom_register', [CustomerContoller::class, 'custom_register'])->name("custom_register");

Route::get('/custom_login_register', [CustomerContoller::class, 'custom_login_register'])->name("custom_login_register");

Route::get('/customer', [CustomerContoller::class, 'customer'])->name("customer"); 

Route::get('/order_now/{id}', [CustomerContoller::class, 'order_now'])->name("order_now"); 

Route::get('/make_order/{id}', [CustomerContoller::class, 'make_order'])->name("make_order"); 

Route::get('/verifyCustomer', [CustomerContoller::class, 'verifyCustomer'])->name("verify"); 

Route::post('/custom_login', [CustomerContoller::class, 'custom_login'])->name("custom_login");

Route::get('/custom_logout', [CustomerContoller::class, 'custom_logout'])->name('custom_logout');

Route::get('/price_quote/{id}', [CustomerContoller::class, 'price_quote'])->name('price_quote');

Route::get('/send_price_quote/{id}', [CustomerContoller::class, 'send_price_quote'])->name('send_price_quote');

Route::get('/customer_profile', [CustomerContoller::class, 'customer_profile'])->name('customer_profile');

Route::post('/comment', [CustomerContoller::class, 'comment'])->name('comment');

Route::get('/print_car_info/{id}', [PostController::class, 'print_car_info'])->name('print_car_info');

Route::get('/print_car_function/{id}', [PostController::class, 'print_car_function'])->name('print_car_function');

