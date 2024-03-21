<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GemsLots extends Model
{
    use HasFactory;
    protected $table = 'gems_lots';
    protected $fillable = [
        'gems_id',
        'lotes_id'
    ];
    
}
