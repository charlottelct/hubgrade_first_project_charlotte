<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immeuble;

class ImmeubleController extends Controller
{
    public function add(Request $request)
    {
        $immeuble = new Immeuble;
        $immeuble->nom = $request->nom;
        $immeuble->code_im = $request->code_Imm;
        $immeuble->save();
        return $immeuble;    
    }
}