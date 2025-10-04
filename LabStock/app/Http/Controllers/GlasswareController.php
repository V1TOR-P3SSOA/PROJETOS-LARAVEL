<?php

namespace App\Http\Controllers;

use App\Models\Glassware;
use Illuminate\Http\Request;

class GlasswareController extends Controller
{

    public function index()
    {
        $glasswares = Glassware::all();
        return view('glasswares.index', compact("glasswares"));
    }
    public function create()
    {
        return view('glasswares.create');
    }
    public function store(Request $request)
    {
        Glassware::create($request->all());

        return redirect()->route('glasswares.index');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
