<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('/city/index')->with(['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('/city/create')->with(['states' => $states]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        City::create($request->all());
        return redirect('/')->with(['message' => 'sucesso']);
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return view('city.index')->with(['city' => $city]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('city.update')->with(['city' => $city]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $city->update($request->all());
        return view('city.index')->with(['city' => $city]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return view('city.index')->with(['message' => "excluido"]);
    }
}
