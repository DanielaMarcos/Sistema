<?php

namespace App\Http\Controllers;

use App\Edades;
use Illuminate\Http\Request;

class EdadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $edades=Edades::orderby('id_edad')->get();
        return view("Edades.index", compact('edades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Edades.create");
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
        $edad=array('descripcion'=>$request->descripcion);

        Edades::create($edad);
        return redirect("edades");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edades  $edades
     * @return \Illuminate\Http\Response
     */
    public function show(Edades $edad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edades  $edades
     * @return \Illuminate\Http\Response
     */
    public function edit(Edades $edade)
    {
        //
        return view("Edades.edit",compact('edade'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edades  $edades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edades $edade)
    {
        //
        $edade->update($request->all());
        return redirect("edades");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edades  $edades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Edades::destroy($id);
        return redirect("edades");
    }
}
