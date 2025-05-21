<?php
//equals with import java.blablabal
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang',[BlogController::class,'tentang']);
Route::get('/blog/kontak',[BlogController::class,'kontak']);
