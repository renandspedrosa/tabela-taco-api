<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user = User::create($user);
        return response()->json($user);
    }
}
