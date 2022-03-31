<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjam';
    protected $fillable = [
        'nama',
        'id_buku',
        'tgl_pinjam',
        'tgl_kembali'
    ];
    public $timestamps = false;
}
