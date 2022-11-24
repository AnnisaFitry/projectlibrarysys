<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\DetailPerpus;
use App\Models\Peminjaman;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'isbn',
        'pengarang',
        'penerbit',
        'jumlah',
        'urutan',
    ];
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function detailperpus(){
        return $this->belongsTo(DetailPerpus::class);
    }
    public function Peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
