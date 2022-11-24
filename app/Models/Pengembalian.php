<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = '';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tgl_kembali',
        'total_denda',
        'status_kembali',
    ];
    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class);
    }
}
