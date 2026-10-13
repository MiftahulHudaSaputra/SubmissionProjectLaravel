@extends('layouts.app')
@section('title', 'Profil Mahasiswa')
@section('content')
    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Prodi: {{ $prodi }}</p>
@endsection