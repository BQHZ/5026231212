<?php
//equals with import java.blablabal
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PensilController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\NilaiController;

//equals with system.out.println()
Route::get('/', function () {
    return view('welcome');
});
Route::get('/selamat',function(){
    return view('notifications::email');
});
Route::get('/halo',function(){
    return "<h1>hai</h1>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('hello',[Coba::class,"helloWorld"]);
Route::get('/linktree', function(){
    return view('linktree');
})->name('linktree');

Route::get('/tugas1', function(){
    return view('tugas1');
})->name('tugas1');

Route::get('/latihanlayout', function(){
    return view('login');
})->name('latihanlayout');

Route::get('/topikcss',function(){
    return view('shadow');
})->name('topikcss');

Route::get('/frontend',function(){
    return view('navigator');
});

Route::get('/js1',function(){
    return view('js1');
});

Route::get('/js2',function(){
    return view('js2');
});

Route::get('/bootstrap', function(){
    return view('bootstrap');
})->name('bootstrap');


Route::get('dosen', [Coba::class, 'index']);
Route::get('/frontend',function(){
    return view('navigator');
});

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang',[BlogController::class,'tentang']);
Route::get('/blog/kontak',[BlogController::class,'kontak']);


//Week 13
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

// Task 10-12
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController:: class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController:: class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiDBController:: class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController:: class, 'cari']);

Route::get('/pensil',[PensilController::class,'pensil']);
Route::get('/pensil/tambah',[PensilController::class,'tambah']);
Route::post('/pensil/store',[PensilController::class,'store']);
Route::get('/pensil/edit/{id}',[PensilController::class,'edit']);
Route::post('/pensil/update',[PensilController::class,'update']);
Route::get('/pensil/hapus/{id}',[PensilController::class,'hapus']);
Route::get('/pensil/cari',[PensilController::class,'cari']);

Route::get('/pensil',[PensilController::class,'pensil']);

Route::get('/karyawan',[KaryawanController::class,'karyawan']);
Route::get('/karyawan/tambah',[KaryawanController::class,'tambah']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class,'edit']);
Route::post('/karyawan/update',[KaryawanController::class,'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapus']);

Route::get('/latihan2', [CounterController::class, 'latihan2']);

Route::get('/keranjang', [App\Http\Controllers\KeranjangController::class, 'indexkeranjang']);
Route::get('/keranjang/tambah', [App\Http\Controllers\KeranjangController::class, 'tambahkeranjang']);
Route::get('/keranjang/tambah/{ID}', [App\Http\Controllers\KeranjangController::class, 'storekeranjang']);
Route::post('/keranjang/update', [App\Http\Controllers\KeranjangController::class, 'updatekeranjang']);
Route::get('/keranjang/hapus/{ID}', [App\Http\Controllers\KeranjangController::class, 'keranjangbelanja']);

Route::get('/eas', [App\Http\Controllers\NilaiController::class, 'index']);
Route::get('/eas/tambah', [App\Http\Controllers\NilaiController::class, 'tambah']);
Route::post('/eas/store', [App\Http\Controllers\NilaiController::class, 'store']);
