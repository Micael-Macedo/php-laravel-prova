<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::all();
        return view('/state/index')->with(['states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('/state/create')->with(['states' => $states]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        State::create($request->all());
        return redirect('/')->with(['message' => 'sucesso']);
    }

    /**
     * Display the specified resource.
     */
    public function show(state $state)
    {
        return view('state.index')->with(['state' => $state]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(state $state)
    {
        return view('state.update')->with(['state' => $state]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, state $state)
    {
        $state->update($request->all());
        return view('state.index')->with(['state' => $state]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(state $state)
    {
        $state->delete();
        return view('state.index')->with(['message' => "excluido"]);
    }
}
