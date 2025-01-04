<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
</head>

<body class="bg-dark">
    <div class="container">
        <h1 class="py-2 border-bottom text-center text-light">Buat Peminjaman</h1>
        <div class="container mt-4 d-flex justify-content-center text-center">

            <form action="{{ route('dashboard-peminjaman.update', $peminjaman->id) }}" method="POST"
                enctype="multipart/form-data" class="w-50">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                @csrf
                @method('PATCH')

                {{-- Floating Labels --}}
                <div class="form-floating mb-3">
                    <select name="buku_id" id="buku_id" class="form-control" required>
                        @foreach ($buku as $bukuu)
                            <option value="{{ $bukuu->id }}" @if ($bukuu->id == $peminjaman->buku_id) selected @endif>
                                {{ $bukuu->judul_buku }}
                            </option>
                        @endforeach
                    </select>
                    <label for="buku_id">Judul Buku</label>
                </div>

                <div class="form-floating mb-3">
                    <select name="user_id" id="user_id" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" @if ($user->id == $peminjaman->user_id) selected @endif>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="user_id">Pilih User</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control"
                        value="{{ $peminjaman->tanggal_pinjam }}" required>
                    <label for="tanggal_pinjam">Tanggal Pinjam</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control"
                        value="{{ $peminjaman->tanggal_kembali }}" required>
                    <label for="tanggal_kembali">Tanggal Kembali</label>
                </div>

                <div class="form-floating mb-3">
                    <select name="status" class="form-control" id="status" required>
                        <option value="dipinjam" @if ($peminjaman->status === 'dipinjam') selected @endif>Dipinjam</option>
                        <option value="dikembalikan" @if ($peminjaman->status === 'dikembalikan') selected @endif>
                            Dikembalikan
                        </option>
                    </select>
                    <label for="status">Status</label>
                </div>
                <a href="{{ route('dashboard-peminjaman.index') }}" class="btn btn-danger">Cancel</a>
                @if ($peminjaman->status === 'dipinjam')
                    <button type="submit" class="btn btn-success">Kembalikan Buku</button>
                @else
                    <button type="submit" class="btn btn-primary">Proses Peminjaman</button>
                @endif
            </form>
        </div>
    </div>
    @vite('resources/sass/app.scss')
</body>

</html>
