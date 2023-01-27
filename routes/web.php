<?php

use App\Http\Controllers\ComicController;

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

Route::get('/', [ComicController::class, 'home'])->name('home');

// Read
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//Create
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Show
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Store
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//Edit
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

//Update
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

//Destroy