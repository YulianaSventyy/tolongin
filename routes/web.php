<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HibarController; //add the ControllerNameSpace

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

Route::get('/hibar', function () {
    return view('hibar');
});

Route::get('/tebar', function () {
    return view('tebar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
 
Route::resource("/hibar2", HibarController::class);
Route::get('/hibar2', [HibarController::class, 'create']);
Route::post('/hibar2', [HibarController::class, 'store']);

