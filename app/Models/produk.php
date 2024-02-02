<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = "produk";

    protected $fillable = ['ProdukID', 'NamaProduk', 'Harga', 'Stok'];
}
