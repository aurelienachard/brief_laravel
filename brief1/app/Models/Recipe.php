<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'titre',
        'description'
    ];

    public $timestamps = false;
}