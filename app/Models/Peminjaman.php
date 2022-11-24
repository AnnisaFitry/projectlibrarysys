<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemberitahuan;
use App\Models\Buku;
use App\Models\Pengembalian;
use App\Models\DetailUser;
use App\Models\DetailPerpus;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tgl_pinjam',
        'total_hari',
        'biaya_denda_perhari',
        'status_pinjam',
    ];
    public function pemberitahuan(){
        return $this->belongsTo(Pemberitahuan::class);
    }
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
    public function pengembalian(){
        return $this->hasMany(Pengembalian::class);
    }
    public function detailuser(){
        return $this->belongsTo(DetailUser::class);
    }
    public function detailperpus(){
        return $this->belongsTo(DetailPerpus::class);
    }
}
