<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailUser;
use App\Models\DetailPerpus;

class Follow extends Model
{
    use HasFactory;
    protected $table = 'follow';
    protected $primaryKey = 'id';
    public function detailuser(){
        return $this->belongsTo(DetailUser::class);
    }
    public function detailperpus(){
        return $this->belongsTo(DetailPerpus::class);
    }
}
