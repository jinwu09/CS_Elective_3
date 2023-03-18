<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $item =   User::all();
        return $item;
    }
    public function show($id)
    {
        return User::all()->where('id', '=', $id)->first();
    }
}
