<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactDetailsController;

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


Route::get('/', [ContactDetailsController::class, 'index'])->name('home');
Route::get('/create', [ContactDetailsController::class, 'create'])->name('create');

Route::post('/create', [ContactDetailsController::class, 'store'])->name('store');

