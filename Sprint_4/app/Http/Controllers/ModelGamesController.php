<?php

namespace App\Http\Controllers;

use App\Models\ModelGames;
use App\Models\ModelTeams;
use Illuminate\Http\Request;

class ModelGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = ModelGames::all();

        return view('games.games', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = ModelTeams::all();
        return view('games.create', ['teams' => $teams]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'team_home_id' => 'required|different:team_visitor_id',
            'team_visitor_id' => 'required|different:team_home_id',
            'date_match' => 'required|date',
        ]);

        ModelGames::create($request->all());

        return redirect()->route('games.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelGames $game)
    {
        $teams = ModelTeams::all();
        return view('games.edit', ['game' => $game, 'teams' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelGames $game)
    {
        $request->validate([
            'team_home_id' => 'required|different:team_visitor_id',
            'team_visitor_id' => 'required|different:team_home_id',
            'date_match' => 'required|date',
        ]);

        $game->update($request->all());

        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelGames $modelGames)
    {
        //
    }
}
