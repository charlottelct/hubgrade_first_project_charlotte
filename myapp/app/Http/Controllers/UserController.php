<?php

namespace App\Http\Controllers;
use App\Users;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add(Request $request) 
    {
        $user = new Users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return $user;
    }
    public function update(Request $request)
    {
        $user = Users::find(1);
        $user->name = $request->name;
        $user->save();
        return $user;
    }
    public function delete(Request $request)
    {
        $user = Users::find(1);
        $user->delete();
        return $user;
    }
}
