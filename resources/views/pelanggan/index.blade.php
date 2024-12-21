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

    <h1>narutoooooooooo</h1>
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
    </table>

</body>

</html>
