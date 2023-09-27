<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Neighborhood;
use App\Models\Realty;
use App\Models\Image;
use App\Models\RealtyType;
use App\Models\State;
use Illuminate\Http\Request;

class RealtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $realtys = Realty::all();
        $cities = City::all();
        $states = State::all();
        $neighborhoods = Neighborhood::all();
        return view('realty.index')->with(['realtys' => $realtys, 'cities' => $cities, 'states' => $states, '$neighborhoods' => $neighborhoods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $realtys = Realty::all();
        $cities = City::all();
        $states = State::all();
        $neighborhoods = Neighborhood::all();
        $realty_types = RealtyType::all();
        return view('/realty/create')->with(['realtys' => $realtys, 'citys' => $cities, 'states' => $states, 'neighborhoods' => $neighborhoods, 'realty_types' => $realty_types]);
    }

    /**
     * Display the specified resource.
     */
    public function show(realty $realty)
    {
        return view('realty.index')->with(['realty' => $realty]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(realty $realty)
    {
        return view('realty.update')->with(['realty' => $realty]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, realty $realty)
    {
        $realty->update($request->all());
        return view('realty.index')->with(['realty' => $realty]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(realty $realty)
    {
        $realty->delete();
        return view('realty.index')->with(['message' => "excluido"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['offer_type'] = $data['offer_type'] === 'on' ? 1: 0;
        $data = array($data);
        $realty = Realty::create($data[0]);
        if($request->images){
            $index = 0;
            foreach ($request->images as $image){
                $id = random_int(0, 5000);
                $data = (object)['filepath' => "imgs/" . $image->getClientOriginalName() . $id ,'upload_date' => date('Y-m-d H:i:s'), 'isThumbnail' => $index === 0 ? 1: 0, "realtyId" => $realty->id];
                $image->move(public_path('imgs/', $image->getClientOriginalName() . $id));
                Image::create($data);
                $index+= 1;
            }
        }
        return view('/');

    }
}
