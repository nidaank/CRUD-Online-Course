<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Materi</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Materi untuk Kursus: {{ $kursus->judul }}</h1>
        <form action="{{ route('materi.store', $kursus->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Materi</label>
                <input type="text" name="judul" class="form-control" id="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="link_embed" class="form-label">Link Embed</label>
                <input type="url" name="link_embed" class="form-control" id="link_embed" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('materi.index', $kursus->id) }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
