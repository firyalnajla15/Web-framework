<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () { //memanggil sebuah kelas, :: = methot static, '/' = 
    return view('welcome');
});

=======
Route::get('/', function () {
    return view('welcome');
});


>>>>>>> 8b67598d133fbfc3be6e51efb0bc8742b5ce176d
Route::get('/home', function(){
    echo "Halaman Home <br>";
    echo "Baris Kedua";
});

<<<<<<< HEAD
Route::get('/mahasiswa/ti/Udin', function(){
=======
Route::get('/mahasiswa/ti/udin', function(){
>>>>>>> 8b67598d133fbfc3be6e51efb0bc8742b5ce176d
    echo "Selamat Datang Udin";
});

Route::get('/mahasiswa/{nama}', function($nama){
    return "Selamat Datang $nama";
});

<<<<<<< HEAD
// route paramenter
Route::get('/mahasiswa/{nama?}/{nim}', function($nama, $nim){
    return "Selamat Datang $nama , NIP: $nim";
});

// route optional paramenter
//Route::get('/dosen/{nama?}/{nip?}', function($nama= "", $nip = ""){
//    return "Selamat Datang $nama , NIP: $nip";
//});

//route rederect //membaca yang terakhir
Route::redirect('/home', '/');

//route fallback
// Route::fallback(function(){
// return "Halaman tidak ditemukan";
// });

//Route::get('/mahasiswa', function(){
//    $arrMhs = [
//        'mhs1' => 'Firyal Najla',
//        'mhs2' => 'Annisa Alpitry'
//    ];
//    return view('akademik.mahasiswa')->with($arrMhs); //method with()
//    //return view('akademik.mahasiswa', $arrMhs); => parameter ke-2 view
//});

//Route::get('/mahasiswa', function(){
//    $nama = 'Firyal Najla';
//    $nim = '2401092007';
//    $total_nilai=100;
//    return view('akademik.nilai_mahasiswa', compact('nama','nim','total_nilai'));
//});

Route::get('/perulangan', function(){
    $nama = "Firyal Najla";
    $nim = "2401092007";
    $total_nilai = [80, 70, 20, 60, 45];
    return view('akademik.perulangan', compact('nama','nim','total_nilai'));
});

Route::get('/mahasiswa', function(){
    $arrMhs=['Udin', 'Budi', 'Khoirun', 'Nur', 'Filsa'];
    return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
});

Route::get('/dosen', function(){
    $arrDosen=['Malik', 'Sahgo', 'Onta', 'Maulana', 'Mulan'];
    return view('akademik.dosen', ['dosen'=>$arrDosen]);
});

Route::get('/pnp/{jurusan}/{prodi}', function($jurusan,$prodi){
    $data = [$jurusan,$prodi];
    return view('akademik.prodi')-> with('data',$data);
})->name('prodi');
=======
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

Route::get('/mahasiswa', function () {
    $nama = 'firyal najla';
    $nim = '2401092007';
    $total_nilai = 70;
    return view('akademik.nilai_mahasiswa',compact('nama','nim','total_nilai'));
});

Route::get('/perulangan', function () {
    return view('akademik.perulangan');
});

Route::get('/perulangan', function () {
    $nama = 'firyal najla';
    $nim = '2401092007';
    $total_nilai = [80,70,20];
    return view('akademik.perulangan',compact('nama','nim','total_nilai'));
});
>>>>>>> 8b67598d133fbfc3be6e51efb0bc8742b5ce176d
