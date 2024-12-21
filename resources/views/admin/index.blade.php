<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="{{ route('logout') }}" class="btn btn-primary"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
    </a>
    <a href="{{ route('dashboard-admin.create') }}" class="btn btn-primary">Tambah Buku</a>
    <a href="{{ route('dashboard-peminjaman.index') }}" class="btn btn-primary">List Peminjaman</a>
    <h1>assd</h1>
    <table class="table table-bordered table-hover table-striped mb-0 bg-white" id="">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>Penulis</th>
                <th>ISBN</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukuu as $buku)
                <tr>
                    <td>{{ $buku->judul_buku }} </td>
                    <td>{{ $buku->penerbit }} </td>
                    <td>{{ $buku->penulis }} </td>
                    <td>{{ $buku->ISBN }} </td>
                    <td>{{ $buku->tahun_terbit }} </td>
                    <td>{{ $buku->stok }} </td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="{{ route('dashboard-admin.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                        {{-- <a href="{{ route('dashboard-admin.edit', ['kost' => $kost->id]) }}" class="btn btn-warning">Edit</a> --}}

                        <form action="{{ route('dashboard-admin.destroy', $buku->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
