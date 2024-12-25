<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
    @vite('resources/sass/app.scss')
</head>

<body class="bg-dark">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-end">
            <ul class="nav-bar-nav d-flex align-items-center mb-2 mb-md-0 fs-5 ms-auto" style="gap: 1rem;">
                <li class="nav-item">
                    <a href="{{ route('dashboard-admin.index') }}" class="btn btn-light">
                        Kembali
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="pb-2 border-bottom text-center text-light">Borrowing Form</h1>
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

            <div class="form-group mb-3">
                <label for="user_id">Pilih User</label>
                <select name="user_id" id="user_id" class="form-control" placeholder="User" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam"
                    placeholder="Tanggal Peminjaman" required>
                @if ($errors->has('tanggal_pinjam'))
                    <small class="text-danger fw-medium">{{ $errors->first('tanggal_pinjam') }}</small>
                @endif
                <label for="tanggal_pinjam">Tanggal Peminjaman</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali"
                    placeholder="Tanggal Pengembalian" required>
                @if ($errors->has('tanggal_kembali'))
                    <small class="text-danger fw-medium">{{ $errors->first('tanggal_kembali') }}</small>
                @endif
                <label for="tanggal_kembali">Tanggal Pengembalian</label>
            </div>

            <div style="justify-self: right">
                <a href="{{ route('dashboard-peminjaman.index') }}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success">Process</button>
            </div>
        </form>
    </div>
    @vite('resources/sass/app.scss')
</body>

</html>
