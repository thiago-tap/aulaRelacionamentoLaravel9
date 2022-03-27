<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        return $users;
    }

    public function findOne(Request $request)
    {
        $users = User::find($request->id);
        return $users;
    }

    public function insert(Request $request)
    {
        $rawData = $request->only('name', 'email', 'password');
        $user = User::create($rawData);
        return $user;
    }
}
