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
        $data = $request;
        //ModelTeams::create($data);
        ModelTeams::create([
            'equipo' => $data['equipo'],
            'ciudad' => $data['ciudad'],
            'puntos' => $data['puntos']
        ]);
        return redirect()->route('teams.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(ModelTeams $modelTeams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelTeams $modelTeams)
{
    return view('teams.edit', ['modelTeams' => $modelTeams]);
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $teamId = $request->input('team_id');

    // Recuperar el modelo del equipo basado en el ID
    $modelTeams = ModelTeams::findOrFail($teamId);

    // Validar los datos del formulario
    $validatedData = $request->validate([
        'equipo' => 'required|string|max:255',
        'ciudad' => 'required|string|max:255',
        'puntos' => 'required|numeric',
    ]);

    // Actualizar los atributos del modelo con los datos del formulario
    $modelTeams->equipo = $validatedData['equipo'];
    $modelTeams->ciudad = $validatedData['ciudad'];
    $modelTeams->puntos = $validatedData['puntos'];

    // Guardar los cambios en la base de datos
    $modelTeams->save();

    // Redirigir a la página de índice de equipos
    return redirect()->route('teams.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelTeams $modelTeams)
{
    $modelTeams->delete();
    return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
}

}
