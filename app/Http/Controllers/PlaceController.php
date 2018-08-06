<?php

namespace App\Http\Controllers;

use App\Http\Resources\Place as PlacesResource;

use App\Place;
use App\Travel_hajd;
use Illuminate\Http\Request;
use App\Travel;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $places_arriving = Place::all()
            ->whereIn('id',Travel::all()->whereIn('id',Travel_hajd::all()->where('hajd_id',$id)->pluck('travel_id'))->pluck('arriving'));


        $places_starting = Place::all()
            ->WhereIn('id',Travel::all()->whereIn('id',Travel_hajd::all()->where('hajd_id',$id)->pluck('travel_id'))->pluck('stating'));

         $places = $places_starting->merge($places_arriving);

        return PlacesResource::collection($places);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
