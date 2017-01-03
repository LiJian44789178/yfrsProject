<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specs extends Model
{
    protected $fillable = [
        'name',
        'cat_id',
        'sort',
        'readonly'
    ];
}
