<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailUser;
use App\Models\DetailPerpus;


class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kota',
    ];
    public function detailuser(){
        return $this->hasMany(DetailUser::class);
    }
    public function detailperpus(){
        return $this->hasMany(DetailPerpus::class);
    }
}
