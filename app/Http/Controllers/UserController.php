<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        return $request->user();
    }

    public function getLists(Request $request)
    {
        return $request->user()->recipeLists;
    }

    public function getAllUsers()
    {
        return User::all();
    }
}
