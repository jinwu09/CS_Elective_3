<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $item =   Item::all();
        return $item;
    }
    public function show($id)
    {
        return Item::all()->where('id', '=', $id)->first();
    }
}
