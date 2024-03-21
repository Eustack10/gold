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
        return $this->belongsToMany(Gems::class, 'gems_lots');
    }
}
