<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kota;
use App\Models\Follow;
use App\Models\Peminjaman;

class DetailUser extends Model
{
    use HasFactory;
    protected $table = 'detail_user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'notelp',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function kota(){
        return $this->belongsTo(Kota::class);
    }
    public function follow(){
        return $this->hasMany(Follow::class);
    }
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
