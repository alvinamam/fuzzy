<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'datas';
    protected $guarded = [];

    public function ringan()
    {
        return $this->hasOne(Ringan::class, 'data_id', 'id');
    }
    public function sedang()
    {
        return $this->hasOne(Sedang::class, 'data_id', 'id');
    }
    public function berat()
    {
        return $this->hasOne(Berat::class, 'data_id', 'id');
    }
    
}
