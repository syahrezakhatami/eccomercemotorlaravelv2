<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;

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

Route::get('/kemejakaos', function () {
    return view('kemeja');
});

Route::get('/sprayjuve', function () {
    return view('sprayju');
});

Route::get('/handukmandi', function () {
    return view('handuk');
});

Route::get('/homeview', [PageController::class, 'home']);

Route::get('/yamahamotor', [PageController::class, 'yamaha']);

Route::get('/hondamotor', [PageController::class, 'honda']);

Route::get('/suzukimotor', [PageController::class, 'suzuki']);

Route::get('/ducatimotor', [PageController::class, 'ducati']);

Route::get('/apriliamotor', [PageController::class, 'aprilia']);

Route::get('/kartutandapenduduk', [PageController::class, 'ktpsaya']);

Route::get('/suratizinmengemudi', [PageController::class, 'simsaya']);

//Route::get('mainlogin', [PageController::class, 'main']);

Route::get('mainregister', [PageController::class, 'regis']);

Route::get('mainedit', [PageController::class, 'edit']);

route::resource('/motor', (MotorController::class));

Route::get('/tambah', [PageController::class, 'create']);

Route::get('/ubah', [PageController::class, 'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
