<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'cover',
        'judul',
        'nama_penerbit',
        'tahun_terbit',
        'pengarang',
        'bahasa',
        'jumlah_halaman',
        'stok_buku'
    ];
    public $timestamps = false;
}
