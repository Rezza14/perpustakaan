<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $fillable = [
        'nama',
        'id_buku',
        'tgl_pinjam',
        'tgl_haruskembali',
        'tgl_kembali',
        'denda'
    ];
    public $timestamps = false;
}
