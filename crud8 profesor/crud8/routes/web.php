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

use App\Http\Controllers\PostController;
Route::resource('/posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [App\Http\Controllers\PdfController::class, 'mform'])->name('form');
Route::post('/guardar', [App\Http\Controllers\PdfController::class, 'mguardar'])->name('guardar');