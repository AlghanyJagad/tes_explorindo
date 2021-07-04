<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'datas';

    protected $fillable = [
        'jenis_ikan', 'harga_beli', 'penjual', 'tanggal_beli', 'image'
    ];
}
