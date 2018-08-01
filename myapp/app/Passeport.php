<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passeport extends Model
{
    protected $fillable = ['nom', 'age', 'sexe', 'taille'];
}