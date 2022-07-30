<?php

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

Route::get('/', [App\Http\Controllers\PageController::class, 'showHomePage'])->name('home');
Route::get('/about', [App\Http\Controllers\PageController::class, 'showAboutPage'])->name('about');


//contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'showContactPage'])->name('contact');
Route::post('/store', [App\Http\Controllers\ContactController::class, 'store'])->name('message.store');
