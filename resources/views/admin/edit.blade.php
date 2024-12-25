<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <a href="{{ route('dashboard-admin.index') }}" class="btn btn-primary">Kembali</a>
    <h1>Edit Buku</h1>
    <form action="{{ route('dashboard-admin.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku"
                value="{{ old('judul_buku', $buku->judul_buku) }}" required>
            @if ($errors->has('judul_buku'))
                <small class="text-danger fw-medium">{{ $errors->first('judul_buku') }}</small>
            @endif
            <label for="judul_buku">Judul Buku</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit" required
            value="{{ old('penerbit', $buku->penerbit) }}" required>>
            @if ($errors->has('penerbit'))
                <small class="text-danger fw-medium">{{ $errors->first('penerbit') }}</small>
            @endif
            <label for="penerbit">Penerbit</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis" required
            value="{{ old('penulis', $buku->penulis) }}" required>
            @if ($errors->has('penulis'))
                <small class="text-danger fw-medium">{{ $errors->first('penulis') }}</small>
            @endif
            <label for="penulis">Penulis</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="ISBN" name="ISBN" placeholder="ISBN" required
            value="{{ old('ISBN', $buku->ISBN) }}" required>
            @if ($errors->has('ISBN'))
                <small class="text-danger fw-medium">{{ $errors->first('ISBN') }}</small>
            @endif
            <label for="ISBN">ISBN</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Tahun Terbit"
            value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" required>
            @if ($errors->has('tahun_terbit'))
                <small class="text-danger fw-medium">{{ $errors->first('tahun_terbit') }}</small>
            @endif
            <label for="tahun_terbit">Tahun Terbit</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok" required
            value="{{ old('stok', $buku->stok) }}" required>
            @if ($errors->has('stok'))
                <small class="text-danger fw-medium">{{ $errors->first('stok') }}</small>
            @endif
            <label for="stok">Stok</label>
        </div>
        <a href="{{ route('dashboard-admin.index') }}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
</body>

</html>
