<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
Route::get('register','register')->name('register');
Route::post('register','registerSave')->name('registerSave');
Route::get('login','login')->name('login');
Route::post('login','loginAction')->name('loginAction');

});

Route::controller(StudentController::class)->group(function(){
Route::get('index','index')->name('student');
Route::post('post','store')->name('student.store');
Route::get('create','create')->name('student.create');

});

Route::get('dashboard',function(){
    return view('dashboard');

})->name('dashboard');