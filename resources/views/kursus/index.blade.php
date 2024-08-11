<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Kursus</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Kursus</h1>
        <a href="{{ route('kursus.create') }}" class="btn btn-primary mb-3">Tambah Kursus</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Durasi (Jam)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kursus as $item)
                    <tr>
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
</body>
</html>
