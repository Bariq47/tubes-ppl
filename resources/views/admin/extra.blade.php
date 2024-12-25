<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')

        {{-- <style>
        .staircase {
            margin-left: 0;
        }

        .staircase:nth-child(2) {
            margin-left: 20px;
        }

        .staircase:nth-child(3) {
            margin-left: 40px;
        }

        .staircase:nth-child(4) {
            margin-left: 60px;
        }

        .staircase:nth-child(5) {
            margin-left: 80px;
        }

        .staircase:nth-child(6) {
            margin-left: 100px;
        }
    </style> --}}
</head>

<body class="bg-dark">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-end">
            <a href="{{ route('dashboard-admin.index') }}" class="btn btn-light">Kembali</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="pb-2 border-bottom text-center text-light">Add a Book</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    {{-- Staircase --}}
    {{-- <div class="container mt-4">
            <form action="{{ route('dashboard-admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                        placeholder="Judul Buku" required>
                    @if ($errors->has('judul_buku'))
                        <small class="text-danger">{{ $errors->first('judul_buku') }}</small>
                    @endif
                    <label for="judul_buku">Judul Buku</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit"
                        required>
                    <label for="penerbit">Penerbit</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis"
                        required>
                    <label for="penulis">Penulis</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ISBN" name="ISBN" placeholder="ISBN"
                        required>
                    <label for="ISBN">ISBN</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit"
                        placeholder="Tahun Terbit" required>
                    <label for="tahun_terbit">Tahun Terbit</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok"
                        required>
                    <label for="stok">Stok</label>
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div> --}}
    @vite('resources/js/app.js')
</body>

</html>
