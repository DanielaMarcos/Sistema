<?php

namespace App\Http\Controllers;

use App\Localidades;
use App\Municipios;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localidades=Localidades::all();
        return view("Localidades.index",compact('localidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $municipios= Municipios::all();
        return view("Localidades.create",compact("municipios"));
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
        Localidades::create($request->all());
        return redirect("localidades");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Localidades  $localidades
     * @return \Illuminate\Http\Response
     */
    public function show(Localidades $localidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Localidades  $localidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Localidades $localidad)
    {
        //
        $municipios = Municipios::all();
        return view("Localidades.edit",compact('localidad','municipios'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Localidades  $localidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localidades $localidad)
    {
        //
        $localidad->update($request->all());
        return redirect("localidades");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Localidades  $localidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Localidades::destroy($id);
        return redirect("localidades");
    }
}
