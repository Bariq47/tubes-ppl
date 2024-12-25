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
        <div class="container-fluid">
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex">
                <ul class="nav-bar-nav d-flex align-items-center mb-2 mb-md-0 fs-5 ms-auto" style="gap: 1rem;">
                    <li class="nav-item">
                        <a href="{{ route('dashboard-admin.index') }}" class="btn btn-light">
                            Kembali
                        </a>
                    </li>
                    <li class="list-inline-item text-light">|</li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard-peminjaman.create') }}" class="btn btn-light">
                            Buat Peminjaman
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="pb-2 border-bottom text-center text-light">Borrowed Books</h1>
        <div class="table-responsive border p-3 mt-4 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white data-table" id="productTable">
                <thead>
                    <tr style="text-align: center">
                        <th>Nama User</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Kembalian</th>
                        <th>Status</th>
                        <TH>Action</TH>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $pinjam)
                        <tr>
                            <td>{{ $pinjam->user->name }}</td>
                            <td>{{ $pinjam->buku->judul_buku }}</td>
                            <td>{{ $pinjam->tanggal_pinjam }}</td>
                            <td>{{ $pinjam->tanggal_kembali }}</td>
                            <td>{{ $pinjam->status }}</td>
                            <td><a href="{{ route('dashboard-peminjaman.edit', $pinjam->id) }}"
                                    class="btn btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <TH>Action</TH>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $pinjam)
                    <tr>
                        <td>{{ $pinjam->user->name }}</td>
                        <td>{{ $pinjam->buku->judul_buku }}</td>
                        <td>{{ $pinjam->tanggal_pinjam }}</td>
                        <td>{{ $pinjam->tanggal_kembali }}</td>
                        <td>{{ $pinjam->status }}</td>
                        <td><a href="{{ route('dashboard-peminjaman.edit', $pinjam->id) }}"
                                class="btn btn-warning">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    @vite('resources/sass/app.scss')
</body>

</html>
