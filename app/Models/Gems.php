<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gems extends Model
{
    use HasFactory;
    protected $table = 'gems';
    protected $fillable = [
        'code',
        'name',
        'unit',
        'unit_price',
    ];

    function lots(){
        return $this->hasMany(Lots::class, 'gems_id', 'id');
    }
}
