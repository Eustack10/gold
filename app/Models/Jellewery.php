<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jellewery extends Model
{
    use HasFactory;
    protected $table = 'jelleweries';
    protected $fillable = [
        'gems_id',
        'pcs',
        'weight',
        'price',
        'amount',
    ];
    function lots(){
        return $this->belongsToMany(Lots::class, 'jellewery_lots', 'jelleweries_id');
    }
}
