<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paketan extends Model
{
    use HasFactory;

    public $table = 'tbl_paketan';
    
    protected $fillable = [
        'id',
        'kd_antrian',
        'tgl_pesanan',
        'nm_cus',
        'alamat',
        'nm_produk',
        'qty',
        'harga',
        'ket',
    ];
}
