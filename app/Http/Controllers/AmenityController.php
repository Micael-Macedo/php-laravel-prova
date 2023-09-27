<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amenitys = Amenity::all();
        return view('/amenity/index')->with(['amenitys' => $amenitys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $amenitys = Amenity::all();
        return view('/amenity/create')->with(['amenitys' => $amenitys]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Amenity::create($request->all());
        return redirect('/')->with(['message' => 'sucesso']);
    }

    /**
     * Display the specified resource.
     */
    public function show(amenity $amenity)
    {
        return view('amenity.index')->with(['amenity' => $amenity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(amenity $amenity)
    {
        return view('amenity.update')->with(['amenity' => $amenity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, amenity $amenity)
    {
        $amenity->update($request->all());
        return view('amenity.index')->with(['amenity' => $amenity]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(amenity $amenity)
    {
        $amenity->delete();
        return view('amenity.index')->with(['message' => "excluido"]);
    }
}
