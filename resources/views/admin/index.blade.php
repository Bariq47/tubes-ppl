<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/sass/app.scss')
</head>

<body class="bg-dark">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-end">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('logout') }}" class="btn btn-light"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out
            </a>
        </div>
    </nav>

    {{-- HERO PART 1 --}}
    <div class="container">
        <h1 class="pb-2 border-bottom text-center text-light">Our Collection</h1>
        {{-- BUTTONS --}}
        <div class="ms-auto mt-4">
            <ul class="list-inline mb-0 text-end">
                <li class="list-inline-item">
                    <a href="{{ route('dashboard-admin.create') }}" class="btn btn-light">
                        Add Book
                    </a>
                </li>
                <li class="list-inline-item text-light ">|</li>
                <li class="list-inline-item">
                    <a href="{{ route('dashboard-peminjaman.index') }}" class="btn btn-light">
                        Borrowing List
                    </a>
                </li>
            </ul>
        </div>

        <hr>
        {{-- TABLE --}}
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white data-table" id="productTable">
                <thead>
                    <tr style="text-align: center">
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Penulis</th>
                        <th>ISBN</th>
                        <th>Tahun Terbit</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukuu as $buku)
                        <tr class="text-center align-middle" style="text-align: center">
                            <td>{{ $buku->judul_buku }} </td>
                            <td>{{ $buku->penerbit }} </td>
                            <td>{{ $buku->penulis }} </td>
                            <td>{{ $buku->ISBN }} </td>
                            <td>{{ $buku->tahun_terbit }} </td>
                            <td>{{ $buku->stok }} </td>
                            <td>
                                <a href="{{ route('dashboard-admin.edit', $buku->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    Ubah
                                </a>
                                <form action="{{ route('dashboard-admin.destroy', $buku->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash3"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
