<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berat extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    public function data()
    {
        return $this->belongsTo(Data::class, 'data_id', 'id');
    }
}
