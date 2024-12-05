<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistryController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->login = $request['login'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return response()->json($user);
    }
}
