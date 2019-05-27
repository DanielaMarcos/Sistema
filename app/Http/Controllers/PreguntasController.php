<?php

namespace App\Http\Controllers;

use App\Preguntas;
use App\Respuestas;
use App\Usuarios;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $preguntas=Preguntas::all();
        return view("Preguntas.index",compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $respuestas= Respuestas::all();
        return view("Preguntas.create",compact("respuestas"));

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
        Preguntas::create($request->all());
        return redirect("preguntas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function show(Preguntas $preguntas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function edit(Preguntas $pregunta)
    {
        //
        $respuestas=Respuestas::all();
        return view("Preguntas.edit",compact('pregunta','respuestas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntas $pregunta)
    {
        //
        $pregunta->update($request->all());
        return redirect("preguntas");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Preguntas::destroy($id);
        return redirect("preguntas");
    }
}
