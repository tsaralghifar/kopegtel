<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasang extends Model
{
    use HasFactory;

    protected $table = 'pasang';

    protected $fillable = [
        'no_inet',
        'nama_pelanggan',
        'paket',
        'alamat',
        'telp'
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'paket', 'id');
    }
}
