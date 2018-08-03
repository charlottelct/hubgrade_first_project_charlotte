<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add(Request $request) 
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->save();
        return $user;
    }
    public function update(Request $request)
    {
        $user = User::find(1);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return $user;
    }
    public function delete(Request $request)
    {
        $user = User::find(1);
        $user->delete();
        return $user;
    }
}
