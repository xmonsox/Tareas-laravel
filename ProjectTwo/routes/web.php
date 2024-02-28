<?php
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Principal');
});
Route::view('/inscripcion','inscripcion')->name('inscri');
Route::view('/Principal','Principal')->name('prin');
// Route::view('/CentroV','centroV')->name('center');

Route::get('/index', [PersonController::class, 'index'])->name('index');

Route::get('/Center', [CenterController::class, 'center'])->name('center');

Route::get('/Leader', [LeaderController::class, 'index'])->name('leader');

Route::get('/Zone', [ZoneController::class, 'index'])->name('zone');