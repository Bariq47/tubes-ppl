<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $bukuu = Buku::all();
        return view('admin.index', compact('bukuu'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'ISBN' => [
                'numeric' => 'The ISBN must be a number.',
                'min' => 'The ISBN must be at least 10 digits.',
                'unique' => 'This ISBN is already taken.',
            ],
            'tahun_terbit' => [
                'max' => 'The Year input is Invalid. ex: 2024.',
            ],
            'stok' => [
                'numeric' => 'The Input must be a number.',
                'min' => 'The Stock should be more than 1. ex: 21',
            ],
        ];

        $validator = Validator::make($request->all(), [
            'judul_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'ISBN' => 'required|numeric|min:1111111111|unique:buku,ISBN', //ISBN Min.10, Max.13
            'tahun_terbit' => 'required|numeric|max:9999',
            'stok' => 'required|numeric|min:1',
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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin.edit', compact('buku'));
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'ISBN' => [
                'numeric' => 'The ISBN must be a number.',
                'min' => 'The ISBN must be at least 10 digits.',
                'unique' => 'This ISBN is already taken.',
            ],
            'tahun_terbit' => [
                'max' => 'The Year input is Invalid. ex: 2024.',
            ],
            'stok' => [
                'numeric' => 'The Input must be a number.',
                'min' => 'The Stock should be more than 1. ex: 21',
            ],
        ];

        $validator = Validator::make($request->all(), [
            'judul_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'ISBN' => 'required|numeric|min:1111111111|unique:buku,ISBN,'. $id, //ISBN Min.10, Max.13
            'tahun_terbit' => 'required|numeric|max:9999',
            'stok' => 'required|numeric|min:1',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $buku = Buku::findOrFail($id);


        $buku->judul_buku = $request->judul_buku;
        $buku->penerbit = $request->penerbit;
        $buku->penulis = $request->penulis;
        $buku->ISBN = $request->ISBN;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->stok = $request->stok;
        $buku->save();

        return redirect()->route('dashboard-admin.index');
    }

    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('dashboard-admin.index');
    }
}
