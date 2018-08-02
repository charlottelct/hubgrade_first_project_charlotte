<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passeport extends Model
{
    protected $fillable = ['age', 'sexe', 'user_id'];
    protected $table = 'passeports';
}