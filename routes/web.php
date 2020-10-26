<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TgskomdatController;
use App\Http\Controllers\BerandaController;
use App\Models\Tgskomdat;
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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-data', [TgskomdatController::class, 'addData']);
Route::post('/add-data-store', [TgskomdatController::class, 'storeTgskomdat'])->name('tgskomdat.store');
Route::get('/', [BerandaController::class, 'index']);
Route::get('/cari', [BerandaController::class, 'cari']);
// Route::get('/', [BerandaController::class, 'cari']);
Route::get('/view-data', [TgskomdatController::class, 'getData']);
Route::get('/view-data/hapus/{id}', [TgskomdatController::class, 'hapus']);
Route::get('/edit-data/{id}', [TgskomdatController::class, 'editData']);
Route::post('/update-data', [TgskomdatController::class, 'updateData'])->name('data.update');
// Route::resource('/edit-data',[TgskomdatController]);
