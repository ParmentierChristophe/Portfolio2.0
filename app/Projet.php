<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['imgcouv','titre', 'type', 'soustitre', 'contenu', 'client', 'agence', 'typecrea', 'annee', 'imgone', 'imgtwo', 'imgthree', 'imgfour' ];

}
