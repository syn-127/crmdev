<?php

namespace App\Http\Controllers\Prospects;

use App\Models\Prospect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    // This will be get request for the api
    public function index()
    {
        return Prospect::all();
    }
    // This will be the post/create request for the api
    public function store(Request $request)
    {
        // This validates the request
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        //
        return Prospect::create($request->all());
    }

    // This will allow you to search for id's via the API
    public function show($id)
    {
        return Prospect::find($id);
    }
}
