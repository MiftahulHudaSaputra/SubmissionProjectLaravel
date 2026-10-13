@extends('layouts.app')
@section('title', 'Daftar Mahasiswa')
@section('content')
    @php 
        $adaNilaiRendah = collect($mahasiswa)->contains('ipk', '<', 2.0);
    @endphp
    
    @if($adaNilaiRendah)
        <x-alert tipe="bahaya">Ada mahasiswa dengan IPK di bawah 2.0!</x-alert>
    @endif

    <table border="1">
        <tr><th>No</th><th>Nama</th><th>NIM</th><th>IPK</th><th>Keterangan</th><th>Aksi</th></tr>
        @forelse ($mahasiswa as $mhs)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['ipk'] }}</td>
            <td>
                @if ($mhs['ipk'] >= 3.5) CumLaude
                @elseif ($mhs['ipk'] >= 3.0) Baik
                @else Perlu ditingkatkan
                @endif
            </td>
            <td><a href="{{ route('mahasiswa.detail', $mhs['nim']) }}">Detail</a></td>
        </tr>
        @empty
        <tr><td colspan="6">Belum ada data</td></tr>
        @endforelse
    </table>
@endsection