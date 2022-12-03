<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ringan extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function data()
    {
       return $this->belongsTo(Data::class, 'data_id', 'id');
    }
}
