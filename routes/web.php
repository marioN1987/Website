<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
});
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home/index', [HomeController::class, 'index'])->name('home.index');


Route::get('/home/portfolio',[HomeController::class,'portfolio'])->name('home.portfolio');

Route::get('/home/contact', [HomeController:: class,'contact'])->name('home.contact');

