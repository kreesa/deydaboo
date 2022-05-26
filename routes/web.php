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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('master')->name('main');
// });
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about-us', [App\Http\Controllers\MainController::class, 'aboutus'])->name('aboutus');
Route::get('/programs', [App\Http\Controllers\MainController::class, 'programs'])->name('programs');
Route::get('/publications', [App\Http\Controllers\MainController::class, 'publications'])->name('publications');
Route::get('/media', [App\Http\Controllers\MainController::class, 'media'])->name('media');
// Route::get('/working-process', [App\Http\Controllers\MainController::class, 'workingprocess'])->name('workingprocess');

Route::get('/contact-us', [App\Http\Controllers\ResponseMailerController::class, 'contactus'])->name('contactus');
// Route::get('/', [App\Http\Controllers\ResponseMailerController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-us', [App\Http\Controllers\ResponseMailerController::class, 'storeContactForm'])->name('contactus.store');


