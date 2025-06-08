<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
     protected $fillable = [
        'email',
        // Ajoute ici d'autres champs si besoin
    ];
}
