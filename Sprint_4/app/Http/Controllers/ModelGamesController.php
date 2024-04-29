<?php

namespace App\Http\Controllers;

use App\Models\ModelGames;
use Illuminate\Http\Request;

class ModelGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('games.games');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
        
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
    public function show(ModelGames $modelGames)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelGames $modelGames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelGames $modelGames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelGames $modelGames)
    {
        //
    }
}
