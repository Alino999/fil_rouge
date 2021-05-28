<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjoutParents extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'pseudo', 'email', 'genre', 'telephone'
    ];
}
