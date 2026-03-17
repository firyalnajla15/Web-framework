<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function(){
    echo "Halaman Home <br>";
    echo "Baris Kedua";
});

Route::get('/mahasiswa/ti/udin', function(){
    echo "Selamat Datang Udin";
});

Route::get('/mahasiswa/{nama}', function($nama){
    return "Selamat Datang $nama";
});

Route::get('/mahasiswa/{nama}/{nim}', function($nama, $nim){
    return "Selamat Datang $nama, NIM: $nim";
});

Route::get('/dosen/{nama?}/{nip?}', function($nama = "", $nip = ""){
    return "Selamat Datang $nama, NIP: $nip";
});

//route redirect
Route::redirect('/home', '/');

//route fallback
//Route::fallback(function(){
   // return "Halaman Tidak Ditemukan";
//});

Route::get('/mahasiswa', function(){
    $arrMhs =
    ['mhs1' => 'Mark Zuckerberg',
    'mhs2' => 'annisa alpiyri'];
    
    //return view('akademik.mahasiswa')->with($arrMhs); // menggunakan parameter ke-2
    return view('akademik.mahasiswa')->with($arrMhs); //method with()
});