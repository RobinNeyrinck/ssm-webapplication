<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $data = new Data();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->save();

        return redirect('/')->with('success', 'Data has been added successfully');
    }
}
