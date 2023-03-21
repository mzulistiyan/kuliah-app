<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;

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
    return view('welcome');
});

Route::get('/obat/index', [ObatController::class, 'index'])->name('index.obat');
Route::get('/obat/create', [ObatController::class, 'create'])->name('create.obat');
Route::post('/obat/store', [ObatController::class, 'store'])->name('store.obat');
Route::post('/obat/edit', [ObatController::class, 'edit'])->name('edit.obat');
Route::post('/obat/update', [ObatController::class, 'update'])->name('update.obat');



