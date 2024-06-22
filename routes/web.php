<?php

use App\Http\Controllers\ItemControler;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ItemControler::class,'index'])->name('index');
Route::post('/items',[ItemControler::class,'store'])->name('store');