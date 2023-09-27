<?php

namespace App\Http\Controllers;

use App\Models\RealtyType;
use Illuminate\Http\Request;

class RealtyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $realtyTypes = RealtyType::all();
        return view('/realtyType/index')->with(['realtyTypes' => $realtyTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $realtyTypes = RealtyType::all();
        return view('/realtyType/create')->with(['realtyTypes' => $realtyTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        RealtyType::create($request->all());
        return redirect('/')->with(['message' => 'sucesso']);
    }

    /**
     * Display the specified resource.
     */
    public function show(realtyType $realtyType)
    {
        return view('realtyType.index')->with(['realtyType' => $realtyType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(realtyType $realtyType)
    {
        return view('realtyType.update')->with(['realtyType' => $realtyType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, realtyType $realtyType)
    {
        $realtyType->update($request->all());
        return view('realtyType.index')->with(['realtyType' => $realtyType]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(realtyType $realtyType)
    {
        $realtyType->delete();
        return view('realtyType.index')->with(['message' => "excluido"]);
    }
}
