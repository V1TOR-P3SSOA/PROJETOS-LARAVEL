<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glasswares;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\VarDumper\VarDumper;

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
        $created = Glasswares::where('request', $request)->create([
            'name' => $request->input('name'),
            'capacity' => $request->input('capacity'),
            'type' => $request->input('type'),
            'batch_number' => $request->input('batch_number'),
            'quantity' => $request->input('quantity'),
            'notes' => $request->input('notes'),
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Vidraria adicionada com sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao adiconar vidraria...');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Glasswares $glassware)
    {
        return view('glassware_show', ['glassware' => $glassware]);
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
        $deleted = Glasswares::where('id', $id)->delete();

        if ($deleted) {
            return redirect()->route('glasswares.index')->with('message', 'Vidraria exluída com sucesso!');
        }

        return redirect()->route('glasswares.index')->with('message', 'Erro ao excluir vidraria...');

    }
}
