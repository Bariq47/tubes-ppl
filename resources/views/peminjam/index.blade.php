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
        <ul>
            <ol>
                <a href="{{ route('dashboard-admin.index') }}" class="btn btn-primary">Kembali</a>
                <a href="{{ route('dashboard-peminjaman.create') }}" class="btn btn-primary">Buat Peminjaman</a>
            </ol>
        </ul>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <TH>action</TH>
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
                        <td><a href="{{ route('dashboard-peminjaman.edit', $pinjam->id) }}" class="btn btn-warning">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @vite('resources/sass/app.scss')
</body>

</html>
