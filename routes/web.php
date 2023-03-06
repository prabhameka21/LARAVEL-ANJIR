<?php

use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\{AuthController,ProfileController,UserrController};

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

Route::get('/dashboard', function () {return view('dashboard');})->middleware('auth');
Route::get('boking', function () {return view('boking');});
Route::get('register', [userController::class, 'register'])->name('register');
Route::post('register', [userController::class, 'register_action'])->name('register.action');
Route::get('login', [userController::class, 'login'])->name('login');
Route::post('login', [userController::class, 'login_action'])->name('login.action');
Route::get('password', [userController::class, 'password'])->name('password');
Route::post('password', [userController::class, 'password_action'])->name('password.action');
Route::get('logout', [userController::class, 'logout'])->name('logout');
Route::get('/',[CaptchaController::class, 'register']);
Route::Get('/reload-captcha',[CaptchaController::class,'reload-captcha']);
Route::Get('/post',[CaptchaController::class,'post']);
Route::get('/admin/login',[AuthController::class,'getLogin'])->name('getLogin');
Route::post('/admin/login',[AuthController::class,'postLogin'])->name('postLogin');
Route::group(['middleware'=>['admin_auth']],function(){
Route::get('/admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
Route::get('/admin/users',[UserController::class,'index'])->name('users.index');
Route::get('/admin/logout',[ProfileController::class,'logout'])->name('logout');
});
