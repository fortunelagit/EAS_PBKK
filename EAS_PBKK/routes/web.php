<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\aboutController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [homeController::class,'index'])->name('home');
Route::get('login',[loginController::class,'index'])->name('login');
Route::get('main',[mainController::class,'index'])->name('main');
Route::get('register',[registerController::class,'index'])->name('register');
Route::get('admin',[adminController::class,'index'])->name('admin');
Route::get('about',[aboutController::class,'index'])->name('about');
Route::post('submit', [registerController::class,'submit']);