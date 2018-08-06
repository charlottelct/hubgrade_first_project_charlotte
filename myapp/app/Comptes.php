<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    protected $fillable = ['id', 'user_id', 'type compte', 'immeuble_id'];
}
