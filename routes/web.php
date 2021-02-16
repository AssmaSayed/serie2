<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\RouteOneController;
use App\Http\Controllers\RouteTreeController;
use App\Http\Controllers\RouteTwoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/route1', [RouteOneController::class, 'index'])->name('r1');


Route::get('/route2', [RouteTwoController::class, 'index'])->name('r2');

Route::get('/route3', [RouteTreeController::class, 'index'])->name('r3');

Route::get('/new', [NewController::class, 'index'])->name('new');
