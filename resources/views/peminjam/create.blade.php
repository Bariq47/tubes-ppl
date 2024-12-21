<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container">
        <a href="{{ route('dashboard-peminjaman.index') }}" class="btn btn-primary">Kembali</a>
        <h1>Membuat Peminjaman</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard-peminjaman.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="buku_id">Judul Buku</label>
                <select name="buku_id" id="buku_id" class="form-control" required>
                    @foreach ($buku as $bukuu)
                        <option value="{{ $bukuu->id }}">{{ $bukuu->judul_buku }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="user_id">Pilih User</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Proses Peminjaman</button>
        </form>
    </div>
    @vite('resources/sass/app.scss')
</body>

</html>
