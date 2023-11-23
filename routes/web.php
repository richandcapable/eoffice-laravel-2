<?php

use App\Http\Controllers\DetailSasaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\IndikatorSasaranController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\SasaranController;
use App\Models\Indikator;
use App\Models\Sasaran;
use App\Models\Tujuan;

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

Route::get('layouts/sasaran', function () {
    return view('layouts.sasaran');
});

Route::get('layouts/detailsasaran', function () {
    return view('layouts.detailsasaran');
});

Route::get('detailsasaran', [DetailSasaranController::class, 'show'])->name('layouts.detailsasaran');

//VISI
Route::get('/visimisi', [VisiController::class, 'index']);
Route::put('/visimisi-update/{id}', [VisiController::class, 'update']);
Route::put('/visis', [VisiController::class, 'store'])->name('visi.store');
Route::get('/visi/{id}', [VisiController::class, 'show']);

//MISI
Route::get('/misi/{id}', [MisiController::class, 'index']);
Route::post('/misi-store', [MisiController::class, 'store']);
Route::put('/misi-update/{id}', [MisiController::class, 'update']);
Route::get('/hapus/misi/{id}', [MisiController::class, 'destroy'])->name('hapus');
//INDIKATOR
Route::post('/indikator-store/{id}', [IndikatorController::class, 'store']);
Route::put('/indikator-update/{id}', [IndikatorController::class, 'update']);
Route::get('/hapus/indikator/{id}', [IndikatorController::class, 'destroy'])->name('hapus');
Route::post('/indikatorsasaran-store', [IndikatorSasaranController::class, 'store']);
//TUJUAN
Route::post('/tujuan-store/{id}', [TujuanController::class, 'store']);
Route::put('/tujuan-update/{id}', [TujuanController::class, 'update']);
Route::delete('/hapus-tujuan/{id}', [TujuanController::class, 'destroy'])->name('hapus');
//SASARAN
Route::get('/sasaran', [SasaranController::class, 'index'])->name('layouts.sasaran');
Route::post('/sasaran-store', [SasaranController::class, 'store']);
Route::put('/sasaran-update/{id}', [SasaranController::class, 'update']);
Route::delete('/hapus-sasaran/{id}', [SasaranController::class, 'destroy'])->name('hapus');
Route::get('/sasaran/search', [SasaranController::class, 'search']);
