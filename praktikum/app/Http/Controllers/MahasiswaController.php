<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $data = [
            'nama' => 'Miftahul Huda Saputra',
            'nim' => '242520110',
            'prodi' => 'Teknologi Informasi',
        ];
        return view('mahasiswa.profil', $data);
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Huda', 'nim' => '242520110', 'ipk' => 3.8],
            ['nama' => 'Elda', 'nim' => '242521110', 'ipk' => 3.2],
            ['nama' => 'Ruben', 'nim' => '242522110', 'ipk' => 2.5],
            ['nama' => 'Gandhung', 'nim' => '242523110', 'ipk' => 1.8],
            ['nama' => 'Eko', 'nim' => '242524110', 'ipk' => 3.9],
        ];
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mahasiswa = [
            '242520110' => ['nama' => 'Huda', 'ipk' => 3.8],
            '242521110' => ['nama' => 'Elda', 'ipk' => 3.2],
            '242522110' => ['nama' => 'Ruben', 'ipk' => 2.5],
            '242523110' => ['nama' => 'Gandhung', 'ipk' => 1.8],
            '242524110' => ['nama' => 'Eko', 'ipk' => 3.9],
        ];

        abort_unless(array_key_exists($nim, $mahasiswa), 404);

        return view('mahasiswa.detail', ['mhs' => $mahasiswa[$nim], 'nim' => $nim]);
    }
}