<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hibar extends Model
{
    use HasFactory;
    protected $table = '_hibar';
    protected $primaryKey = 'id';
    protected $fillable = ['Nama_Barang', 'Kategori', 'Lokasi', 'Deskripsi', 'poin', 'Foto'];
}
