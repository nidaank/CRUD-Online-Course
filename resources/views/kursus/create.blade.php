<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Kursus</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Kursus</h1>
        <form action="{{ route('kursus.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi (Jam)</label>
                <input type="number" name="durasi" class="form-control" id="durasi" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
            <!-- Alert untuk menampilkan pesan sukses -->
            @if (session('success'))
                <div class="alert alert-primary mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
</body>
</html>
