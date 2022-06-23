<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodieselController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SendEmailController;

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
Route::get('/', [BiodieselController::class, 'index_Bio'])->name('home');
Route::post('/insert',[BiodieselController::class,'insertdata']);
Route::post('/insertbio',[BiodieselController::class, 'insertdatabio']);
Route::post('/insertfab',[BiodieselController::class, 'insertdatafab']);
Route::post('/save', [BiodieselController::class, 'insert_data']);

// Route::get('edit/{id}', [BiodieselController::class, 'edit']);
// Route::put('update/{id}', [BiodieselController::class, 'update']);
Route::get('add_biodiesel',[BiodieselController::class, 'add_biodiesel'])->name('biodiesel');
Route::post('insert_adduser',[BiodieselController::class, 'insert_adduser']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('mail_biodiesel',[BiodieselController::class, 'mail_biodiesel']);