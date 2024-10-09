<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // send data using array
        // $data['nama'] = 'Nama Mahasiswa';
        // $data['kelas'] = 'IF D 22';
        // $data['prodi'] = '<strong>Informatika</strong>';

        // return view('student.index', $data);

        // send data using compact function
        $nama = 'Nama Mahasiswa';
        $kelas = 'IF D 22';
        $prodi = '<strong>Informatika</strong>';

        $alphabets = ['a', 'b', 'c', 'd', 'e', 'f'];

        $iteration = 0;
        
        return view('student.index', compact('nama', 'kelas', 'prodi', 'alphabets'));
    }
}
