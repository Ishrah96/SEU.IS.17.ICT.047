<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insert;
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

Route::view('form', 'form');

Route::get('insert', [insert::class,'add']);

Route::get('detail', [insert::class,'detail']);

Route::get('delete/{name}', [insert::class,'delete']);

Route::get('edit/{name}', [insert::class,'edit']);