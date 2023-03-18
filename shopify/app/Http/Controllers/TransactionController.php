<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $item =   Transaction::all();
        return $item;
    }
    public function show($id)
    {
        return Transaction::all()->where('id', '=', $id)->first();
    }
}
