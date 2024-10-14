<?php

use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\Catatan_transaksiController;
use App\Http\Controllers\Hutang_piutangController;
use App\Http\Controllers\InvestasiController;
use App\Http\Controllers\Kategori_transaksiController;
use App\Http\Controllers\Laporan_bulananController;
use App\Http\Controllers\Mata_uangController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\SaldoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('anggaran',AnggaranController::class);
Route::resource('catatan_transaksi',Catatan_transaksiController::class);
Route::resource('hutang_piutang',Hutang_piutangController::class);
Route::resource('investasi',InvestasiController::class);
Route::resource('kategori_transaksi',Kategori_transaksiController::class);
Route::resource('laporan_bulanan',Laporan_bulananController::class);
Route::resource('mata_uang',Mata_uangController::class);
Route::resource('pemasukan',PemasukanController::class);
Route::resource('pengeluaran',PengeluaranController::class);
Route::resource('saldo',SaldoController::class);