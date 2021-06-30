<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // public $guarded = [];
    protected $table = "bukus";
    protected $primaryKet = "id";
    protected $fillable = [
        'id', 'merk_leptop', 'seri_leptop', 'jumlah_stok', 'gambar','public_id'
    ];

}
