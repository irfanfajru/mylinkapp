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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/edit/{id_page}', function ($id_page) {
    return view('edit-page')->with('id_page',$id_page);
})->name('edit-page');

Route::get('/about', function () {
    return view('pages.about');
})->name('About');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('FAQ');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('Contact');