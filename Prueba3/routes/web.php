<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestSeeder;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index',[TestSeeder::class,'index'])->name('index');
//Route::get('/create',[NoteController::class,'create'])->name('create');
Route::post('/store',[TestSeeder::class,'store'])->name('store');
//Route::get('/edit/{note}',[NoteController::class,'edit'])->name('edit');
//Route::put('/update/{note}',[NoteController::class,'update'])->name('update');
Route::get('/show/{note}',[TestSeeder::class,'show'])->name('show');


//Route::delete('/destroy/{note}',[NoteController::class,'destroy'])->name('destroy');