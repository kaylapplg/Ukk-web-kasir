<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = "pelanggan";

    protected $fillable = ['NamaPelanggan', 'Alamat', 'NomorTelepon'];
}
