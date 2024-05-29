<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Trucker;
use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    
    public function asociar(){
        $trucks=Truck::all();
        $truckers=Trucker::all();
        return view('truck_trucker.asociar',compact('trucks','truckers'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trucker=Trucker::find($request->trucker_id);
        $trucker->trucks()->attach($request->truck_id);
    return "registro guardado exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
