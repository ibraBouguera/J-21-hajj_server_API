<?php

namespace App\Http\Controllers;

use App\Housing;
use Illuminate\Http\Request;
use App\Http\Resources\Housings as HousingResource;
class HousingController extends Controller
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
     * @param  \App\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $housing= Housing::query()->select(\DB::raw('*, (select name from `hotels` where `id` = housings.hotel_id) as name' ))->where('hajd_id',$id)->get();
        return HousingResource::collection($housing);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function edit(Housing $housing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Housing $housing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Housing $housing)
    {
        //
    }
}
