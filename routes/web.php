<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[UserController::class,'welcome'])->name('other.welcome');
Route::get('/register',[UserController::class,'register'])->name('other.register');
Route::Post('/register',[UserController::class,'registerPost'])->name('other.registerPost');
Route::get('/login',[UserController::class,'login'])->name('other.login');
Route::Post('/login',[UserController::class,'loginPost'])->name('other.loginPost');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('other.dashboard');
Route::get('/admin_dashboard',[UserController::class,'adminDashboard'])->name('other.admin_dashboard');
Route::get('/user_dashboard',[UserController::class,'userDashboard'])->name('other.user_dashboard');
Route::get('/user/details/all',[UserController::class,'allUserDetails'])->name('other.allUserDetails');
Route::get('/user/details/{id}',[UserController::class,'userDetails'])->name('other.userDetails');

