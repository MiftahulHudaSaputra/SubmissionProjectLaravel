<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Matakuliah</title>
</head>
<body>
    <h1>Data Matakuliah</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('matakuliah.create') }}">Tambah Matakuliah</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kode Matakuliah</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $matakuliah->kode_matakuliah }}</td>
                    <td>{{ $matakuliah->nama_matakuliah }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                    <td><a href="{{ url('/matakuliah/' . $matakuliah->id) }}">Detail</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data matakuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>