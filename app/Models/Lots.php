<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lots extends Model
{
    use HasFactory;
    protected $table = 'lots';
    protected $fillable = [
        'code',
        'gems_id',
        'name',
        'weight',
        'unit',
        'gram',
        'unit_price',
        'price',
        'amount',
        'cert_no',
        'image'
    ];

    function gems(){
        return $this->belongsTo(Gems::class, 'gems_id', 'id');
    }

    function jellewery(){
        return $this->belongsToMany(Jellewery::class, 'jellewery_lots');
    }
}
