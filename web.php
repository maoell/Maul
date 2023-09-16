<?php

use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about');
   
});
Route::get('/login', function () {
    return view ('login');
   
});
Route::get('/registrasi', [MasyarakatController::class, 'buatakun']) ;
Route::get('/table', [PengaduanController::class, 'index']) ;
Route::get('/table_masyarakat', [MasyarakatController::class, 'table']) ;
   
Route::get('/home', [PengaduanController::class, 'home']) ;

Route::get('/isi_laporan', [PengaduanController::class, 'isi_laporan']) ;

Route::get('/app', function(){
     return view('layouts.app');
});

Route::post('/isi_laporan', [PengaduanController::class, 'proses_tambah_pengaduan']) ;
Route::post('/registrasi', [MasyarakatController::class, 'registrasi']) ;
   
   








