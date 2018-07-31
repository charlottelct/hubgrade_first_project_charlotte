<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ImmeubleController;
use App\Immeuble;

class ImmeubleController extends Controller
{
    public function add(Request $request)
    {
        return Immeuble::create($request);
        return response()->json($request, 201);
    }
}