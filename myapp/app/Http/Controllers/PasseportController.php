<?php

namespace App\Http\Controllers;

use App\Passeport;
use Illuminate\Http\Request;

class PasseportController extends Controller
{
    public function add(Request $request) 
    {
        $passeport = new Passeport;
        $passeport->nom = $request->nom;
        $passeport->age = $request->age;
        $passeport->sexe = $request->sexe;
        $passeport->taille = $request->taille;
        $passeport->save();
        return $passeport;
    }
    public function update(Request $request)
    {
        $passeport = Passeport::find(1);
        $passeport->nom = $request->nom;
        $passeport->save();
        return $passeport;
    }
    public function delete(Request $request)
    {
        $passeport = Passeport::find(1);
        $passeport->delete();
        return $passeport;
    }
}
