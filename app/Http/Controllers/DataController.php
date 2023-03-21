<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $data = new Data();
        $data->name = $request->input('username');
        $data->email = $request->input('password');
        $data->save();

        return $data;
    }

    public function index()
    {
        return Data::all();
    }
}
