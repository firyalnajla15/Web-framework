<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
     public function insertSql(){
        $query=DB::insert("INSERT INTO students (nim, nama_lengkap, tempat_lahir, tgl_lahir, email,
        prodi, alamat, created_at, updated_at)
        VALUES ('2401092007', 'Firyal Najla', 'Bukittinggi', '2006-02-15', 'najla@gmail.com', 'Teknologi Informasi',
         'Jl. jalan jalan jalan', now(), now())");
    }
}
