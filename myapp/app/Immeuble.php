<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    protected $fillable = ['nom', 'id', 'code_im'];
}
