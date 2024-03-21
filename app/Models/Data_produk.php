<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_produk extends Model
{
    use HasFactory;

    public $table = 'tbl_produk';
    
    protected $fillable = [
        'id',
        'kd_kue',
        'nm_kue',
        'harga',
        'rasa',
        'ket',
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4'
    ];
}
