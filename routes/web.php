<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

// Route::get('/buku', 'BukuController@index');
Route::get('/',function (){
    return view('welcome');
});
Route::get('/buku', [BukuController::class,'index']);
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class,'store'])->name('buku.store');
Route::post('/buku/delete/{id}', 'BukuController@destroy')->name('buku.destroy');
