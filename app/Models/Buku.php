<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = ['user_id', 'buku_id', 'penerbit', 'ISBN', 'stok','tahun_terbit','judul_buku'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

}
