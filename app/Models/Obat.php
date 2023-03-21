<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'deskripsi',
        'tipe',
        'jumlah',
        'harga_satuan',
        'updated_by',
        'created_at'
    ];
}
