<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JelleweryLots extends Model
{
    use HasFactory;
    protected $table = 'jellewery_lots';
    protected $fillable = ['jelleweries_id', 'lots_id'];
}
