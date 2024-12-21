<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukuu = Buku::all();
        return view('admin.index', compact('bukuu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'penerbit' => ':Attribute harus diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'judul_buku' => 'required|string|max:255',
            'penerbit' => 'required|string',
            'penulis' => 'required|string',
            'ISBN' => 'required|numeric|unique:buku,ISBN',
            'tahun_terbit' => 'required|numeric',
            'stok' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $buku = new Buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->penerbit = $request->penerbit;
        $buku->penulis = $request->penulis;
        $buku->ISBN = $request->ISBN;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->stok = $request->stok;
        $buku->save();

        return redirect()->route('dashboard-admin.index');
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
        $buku = Buku::findOrFail($id);
        return view('admin.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('dashboard-admin.index');

    }
}
