<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\DetailPerpus;

class AccPerpus extends Model
{
    use HasFactory;
    protected $table = 'acc_perpus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status',
        'pesan',
    ];
    public function detailperpus(){
        return $this->belongsTo(DetailPerpus::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
