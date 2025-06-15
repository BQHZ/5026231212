<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller{

public function latihan2()
    {

        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');

    	// mengambil data dari table pegawai
    	$jumlah = DB::table('pagecounter')->where('ID', 1)->value('Jumlah');

    	// mengirim data penghapus ke view indexAdd commentMore actions
    	return view('latihan2',['jumlah' => $jumlah]);

    }

    
}
