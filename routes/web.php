<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

////////////PUBLIC SIDE////////////

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'showContact']);
Route::post('/contact', [ContactController::class, 'sendEmail']);

Route::get('/login', [UserController::class, 'showLogin']);
Route::post('/login', [UserController::class, 'login']);

////////////USER SIDE////////////

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profile', [UserController::class, 'showProfile']);
Route::put('/profile/{id}/upload_photo', [UserController::class, 'uploadPhotoProfile']);

Route::get('/order', [OrderController::class, 'showOrders']);
Route::get('/order/completed', [OrderController::class, 'showMyCompletedOrders']);
Route::get('/order/{id}', [OrderController::class, 'showOrder']);
Route::put('/receive_order/{id}', [OrderController::class, 'receiveOrder']);
Route::put('/cancel_order/{id}', [OrderController::class, 'cancelMyOrder']);

Route::get('/cafeteria', [OrderController::class, 'showCafeteria']);
Route::post('/cafeteria', [OrderController::class, 'takeOrder']);
Route::post('/cafeteria/checkout', [OrderController::class, 'placeOrder']);

////////////ADMIN SIDE////////////

Route::get('/admin', [UserController::class, 'showAdminDashboard']);

Route::get('/admin/register', [UserController::class, 'showRegister']);
Route::post('/admin/register', [UserController::class, 'register']);
Route::get('/admin/register/newadmin', [UserController::class, 'showAdminRegister']);
Route::post('/admin/register/newadmin', [UserController::class, 'adminRegister']);

Route::middleware('checkSession')->get('/admin/orders', [OrderController::class, 'showOngoingOrders']);
Route::get('/admin/orders/completed', [OrderController::class, 'showCompletedOrders']);
Route::get('/admin/orders/{id}', [OrderController::class, 'showOrderInfo']);
Route::put('/admin/accept_order/{id}', [OrderController::class, 'acceptOrder']);
Route::put('/admin/cancel_order/{id}', [OrderController::class, 'cancelOrder']);
Route::put('/admin/update_order/{id}', [OrderController::class, 'updateOrder']);

Route::get('/admin/users/{id}', [UserController::class, 'viewUser']);

Route::resource('/admin/subjects', SubjectController::class);
// Route::get('/subjects/transfer', [StudentController::class, 'transferSubject']);

Route::get('/admin/students', [StudentController::class, 'index']);
Route::get('/admin/students/{id}', [StudentController::class, 'show']);

// Route::get('/admin/faculties', [FacultyController::class, 'index']);
Route::get('/faculties', [FacultyController::class, 'index']);

Route::resource('/admin/products', ProductController::class);
Route::put('/admin/products/restock/{id}', [ProductController::class, 'restock']);
