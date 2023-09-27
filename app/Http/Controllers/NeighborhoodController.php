<?php

namespace App\Http\Controllers;

use App\Models\Neighborhood;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $neighborhoods = Neighborhood::all();
        return view('/neighborhood/index')->with(['neighborhoods' => $neighborhoods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $neighborhoods = Neighborhood::all();
        return view('/neighborhood/create')->with(['neighborhoods' => $neighborhoods]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Neighborhood::create($request->all());
        return redirect('/')->with(['message' => 'sucesso']);
    }

    /**
     * Display the specified resource.
     */
    public function show(neighborhood $neighborhood)
    {
        return view('neighborhood.index')->with(['neighborhood' => $neighborhood]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(neighborhood $neighborhood)
    {
        return view('neighborhood.update')->with(['neighborhood' => $neighborhood]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, neighborhood $neighborhood)
    {
        $neighborhood->update($request->all());
        return view('neighborhood.index')->with(['neighborhood' => $neighborhood]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(neighborhood $neighborhood)
    {
        $neighborhood->delete();
        return view('neighborhood.index')->with(['message' => "excluido"]);
    }
}
