<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goldsmith extends Model
{
    use HasFactory;
    protected $table = 'goldsmith';
    protected $fillable = [
        'code',
        'name',
        'phone',
        'address1',
        'address2',
        'remark',
    ];
    
}
