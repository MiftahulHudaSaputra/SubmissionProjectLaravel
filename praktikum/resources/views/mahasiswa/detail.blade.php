@extends('layouts.app')
@section('title', 'Detail Mahasiswa')
@section('content')
    <p>Nama: {{ $mhs['nama'] }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>IPK: {{ $mhs['ipk'] }}</p>
@endsection