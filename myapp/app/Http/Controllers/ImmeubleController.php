<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immeuble;

class ImmeubleController extends Controller
{
    public function add(Request $request)
    {
        $immeuble = new Immeuble;
        $immeuble->name = $request->name;
        $immeuble->save();
        return $immeuble;    
    }

    public function update(Request $request)
    {
        $immeuble = Immeuble::find(1);
        $immeuble->name = $request->name;
        $immeuble->save();
        return $immeuble;
    }

    public function delete(Request $request)
    {
        $immeuble = Immeuble::find(1);
        $immeuble->delete();
        return $immeuble;
    }
}