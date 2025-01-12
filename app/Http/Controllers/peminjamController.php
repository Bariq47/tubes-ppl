<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class peminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::with('user', 'buku')->get();
        return view('peminjam.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $buku = Buku::all();
        return view('peminjam.create', compact('users', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'tanggal_kembali' => ':Tanggal pengembalian tidak obleh sebelum tanggal pinjam',
        ];

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'buku_id' => 'required|exists:buku,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $buku = Buku::findOrFail($request->buku_id);
        if ($buku->stok <= 0) {
            return redirect()->back()->withErrors('peminjaman gagal', 'stock kosong')->withInput();
        };

        $peminjaman = new Peminjaman;
        $peminjaman->user_id = $request->user_id;
        $peminjaman->buku_id = $request->buku_id;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;

        $buku->stok -= 1;
        $buku->save();

        $peminjaman->save();

        return redirect()->route('dashboard-peminjaman.index')->with('success', 'Peminjaman berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjaman = Peminjaman::with('user', 'buku')->findOrFail($id);
        $buku = Buku::all();
        $users = User::all();
        return view('peminjam.edit', compact('peminjaman', 'users', 'buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'tanggal_kembali' => ':Tanggal pengembalian tidak obleh sebelum tanggal pinjam',
        ];

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'buku_id' => 'required|exists:buku,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $peminjaman = Peminjaman::findOrFail($id);

        $bukuLama = Buku::findOrFail($peminjaman->buku_id);
        $bukuBaru = Buku::findOrFail($request->buku_id);


        if ($request->status === 'dikembalikan') {
            if ($peminjaman->status === 'dipinjam') {
                $bukuLama->stok += 1;
                $bukuLama->save();
            } else {
                return redirect()->back()->withErrors('Buku belum dipinjam')->withInput();
            }
        }


        if ($bukuBaru->id !== $bukuLama->id) {
            $bukuLama->stok += 1;
            $bukuLama->save();

            if ($bukuBaru->stok <= 0) {
                return redirect()->back()->withErrors('stok buku tidak cukup');
            }

            $bukuBaru->stok -= 1;
            $bukuBaru->save();
        }

        $peminjaman->buku_id = $request->buku_id;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        $peminjaman->status = $request->status;
        $peminjaman->save();

        return redirect()->route('dashboard-peminjaman.index')->with('success', 'peminjaman behrasil diupdate');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
