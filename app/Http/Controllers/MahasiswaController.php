<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{

    public function index()
    {
        return "Ini adalah method index di MahasiswaController";
    }

    public function insertSql()
    {
        DB::insert("INSERT INTO students 
        (nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        VALUES ('2401092002','Annisa Alpitri','Sawahlunto','2005-12-26',
        'annisa@linux.org','MI','Jl. Sudirman no.10 Padang',now(),now())");

        return "Insert SQL berhasil";
    }

    public function insertPrepared()
    {
        DB::insert("INSERT INTO students 
        (nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        VALUES (?,?,?,?,?,?,?,?,?)", [
            '2022090908',
            'Taylor Otwell',
            'Limau Manis',
            '1971-08-12',
            'taylor@laravel.com',
            'MI',
            'Jl. M Hatta no.1 Padang',
            now(),
            now()
        ]);

        return "Insert Prepared berhasil";
    }

    public function insertBinding()
    {
        DB::insert("INSERT INTO students 
        (nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        VALUES (:nim,:nama_lengkap,:tempat_lahir,:tgl_lahir,:email,:prodi,:alamat,:created_at,:updated_at)", 
        [
            'nim' => '2022090909',
            'nama_lengkap' => 'Bill Gates',
            'tempat_lahir' => 'Payakumbuh',
            'tgl_lahir' => '1963-05-01',
            'email' => 'bill@microsoft.com',
            'prodi' => 'MI',
            'alamat' => 'Jl. M Yamin no.1 Padang',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return "Insert Binding berhasil";
    }

    public function update()
    {
        DB::update("UPDATE students 
        SET tempat_lahir = ? 
        WHERE nama_lengkap = ?", 
        ['Seattle Washington US', 'Bill Gates']);

        return "Update berhasil";
    }

    public function delete()
    {
        DB::delete("DELETE FROM students WHERE nama_lengkap = ?", 
        ['Bill Gates']);

        return "Delete berhasil";
    }

    public function select()
    {
        $query = DB::select("SELECT * FROM students");
        dd($query);
    }

    public function selectTampil()
    {
        $query = DB::select("SELECT * FROM students");

        if (count($query) > 0) {
            echo ($query[0]->id) . "<br>";
            echo ($query[0]->nim) . "<br>";
            echo ($query[0]->nama_lengkap) . "<br>";
            echo ($query[0]->email) . "<br>";
            echo ($query[0]->alamat);
        } else {
            echo "Data kosong";
        }
    }

    public function selectView()
    {
        $mahasiswas = DB::select("SELECT * FROM students");
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function selectWhere()
    {
        $mahasiswas = DB::select(
            "SELECT * FROM students WHERE prodi = ? ORDER BY nim ASC",
            ['MI']
        );

        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function truncate()
    {
        DB::statement("TRUNCATE students");
        return "Tabel students berhasil dikosongkan";
    }
}