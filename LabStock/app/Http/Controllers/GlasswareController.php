<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glasswares;

class GlasswareController extends Controller
{
    public function index()
    {
        $glasswares = Glasswares::all();
        return view('glasswares', compact('glasswares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('glassware_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Glasswares $glassware)
    {
        return view('glassware_edit', ['glassware' => $glassware]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $updated = Glasswares::where('id', $id)->update($request->except(['_token','_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Atualização feita com sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao atualizar...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
