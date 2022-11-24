<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Pemberitahuan extends Model
{
    use HasFactory;
    protected $table = 'pemberitahuan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'isi',
    ];
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
