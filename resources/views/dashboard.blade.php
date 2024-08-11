<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
    <title>Online Course</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Kursus Online') }}
            </h2>
        </x-slot>

        <!-- Alert untuk menampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-primary mt-3 mx-3" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="container mt-3">
            <a href="{{ route('kursus.create') }}" class="btn btn-primary mb-3">Tambah Kursus</a>
            <table class="table table-striped-columns table-bordered">
                <thead class="table-dark">
                    <tr class="text-md-center">
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Durasi (Jam)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kursus as $item)
                        <tr class="text-md-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->durasi }}</td>
                            <td>
                                <a href="{{ route('kursus.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('kursus.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                                <a href="{{ route('materi.index', $item->id) }}" class="btn btn-info btn-sm">Lihat Materi</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-app-layout>
</body>
</html>
