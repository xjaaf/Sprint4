<?php

namespace App\Http\Controllers;

use App\Models\ModelTeams;
use Illuminate\Http\Request;

class ModelTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = ModelTeams::all();

        return view('teams.teams', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'equipo' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'puntos' => 'required|numeric',
        ]);

        ModelTeams::create($data);

        return redirect()->route('teams.index')->with('success', 'Team created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = ModelTeams::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'equipo' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'puntos' => 'required|numeric',
        ]);

        $team = ModelTeams::findOrFail($id);
        $team->update($validatedData);

        return redirect()->route('teams.index')->with('success', 'Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = ModelTeams::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
    }
}
