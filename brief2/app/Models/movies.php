<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $fillable = [
        'titre',
        'annee', 
        'note',
        'commentaire'
    ];
}
