<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Materi</title>
</head>
<body>
    <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Daftar Materi') }}
                </h2>
            </x-slot>
        <!-- Alert untuk menampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-primary mt-3 mx-3" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="container mt-4">
            <h1 class="mb-3">Kursus: {{ $kursus->judul }}</h1>
            <a href="{{ route('materi.create', $kursus->id) }}" class="btn btn-primary mb-3">Tambah Materi</a>
            <table class="table table-striped-columns table-bordered">
                <thead class="table-dark">
                    <tr class="text-md-center">
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Link Embed</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materi as $item)
                        <tr class="text-md-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="{{ $item->link_embed }}" target="_blank" class="btn btn-link btn-sm">
                                    Lihat Materi
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('materi.edit', [$kursus->id, $item->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('materi.destroy', [$kursus->id, $item->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Kursus</a>
        </div>
    </x-app-layout>
</body>
</html>
