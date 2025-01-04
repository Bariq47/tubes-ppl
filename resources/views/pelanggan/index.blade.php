<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
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
        <h2 class="pb-2 border-bottom text-center text-light">Daftar Buku</h2>
        <hr>
        {{-- TABLE --}}
         <div class="table-responsive border p-3 rounded-3">
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
                            {{-- <th>Action</th> --}}
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    {{-- <h1>narutoooooooooo</h1>
    <table class="table table-bordered table-hover table-striped mb-0 bg-white" id="tableKos">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>Penulis</th>
                <th>ISBN</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>?</th>
                <th>?</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukuu as $buku)
                <td>{{ $buku->judul_buku }}<</td>
            @endforeach
        </tbody>
    </table> --}}
</body>

</html>
