<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;
use App\Http\Resources\Travels as TravelsResource;
use App\Travel_hajd;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travels = Travel::query()->select(\DB::raw('*, (select type from `transportations` where `id` = travels.transportation_id ) as type,(select matricule from `transportations` where `id` = travels.transportation_id ) as matricule ,(select capacity from `transportations` where `id` = travels.transportation_id ) as capacity ,(select latitude from `transportations` where `id` = travels.transportation_id ) as lat,(select longitude from `transportations` where `id` = travels.transportation_id ) as lon , (select name from `places` where `id` = travels.arriving ) as arrive , (select name from `places` where `id` = travels.stating ) as start ' ))->whereIn('id',Travel_hajd::all()->where('hajd_id',$id))->get();

        return TravelsResource::collection($travels);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
