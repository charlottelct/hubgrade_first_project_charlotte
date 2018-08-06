<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comptes;

class ComptesController extends Controller
{
    public function add(Request $request)
    {
        $comptes = new comptes;
        $comptes->user_id = $request->user_id;
        $comptes->type_compte = $request->type_compte;
        $comptes->immeuble_id = $request->immeuble_id;
        $comptes->save();
        return $comptes;    
    }
    public function update(Request $request)
    {
        $user = comptes::find(1);
        $user->user_id = $request->user_id;
        $user->type_compte = $request->type_compte;
        $user->immeuble_id = $request->immeuble_id;
        $user->save();
        return $user;
    }
    public function delete(Request $request)
    {
        $user = comptes::find(1);
        $user->delete();
        return $user;
    }
}
