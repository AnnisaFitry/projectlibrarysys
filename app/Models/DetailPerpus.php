<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kota;
use App\Models\AccPerpus;
use App\Models\DetailPerpus;
use App\Models\Follow;

class DetailPerpus extends Model
{
    use HasFactory;
    protected $table = 'detail_perpus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_perpus',
        'foto_perpus',
        'alamat_perpus',
        'telp',
        'bio',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function kota(){
        return $this->belongsTo(Kota::class);
    }
    public function accperpus(){
        return $this->hasMany(AccPerpus::class);
    }
    public function detailperpus(){
        return $this->hasMany(DetailPerpus::class);
    }
    public function follow(){
        return $this->hasMany(Follow::class);
    }
}
