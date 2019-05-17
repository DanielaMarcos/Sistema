<?php

namespace App\Http\Controllers;

use App\Edades;
use App\Estados;
use App\Localidades;
use App\Usuarios;
use App\Sexos;
use App\Civiles;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$usuarios=Usuarios::orderby('id_usuario')->get();
        //return view("Usuarios.index", compact('usuarios'));

        $usuarios=Usuarios::all();
        return view("Usuarios.index",compact('usuarios'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $localidades= Localidades::all();
        $edades=Edades::all();
        $sexos=Sexos::all();
        $civiles=Civiles::all();
        return view("Usuarios.create",compact("localidades",'edades','sexos','civiles'));




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $usuario=array('nombre'=>$request->nombre_us,
            //'sexo'=>$request->sexo_us,
            //'estado_civil'=>$request->estadocivil_us,
            //'edad'=>$request->edad_us,
            //'id_estado'=>$request->idestado_us);
        //Usuarios::create($usuario);
        //return redirect("usuarios");
        Usuarios::create($request->all());
        return redirect("usuarios");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuario)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuario)
    {
        //
        //return view("Usuarios.edit",compact('usuario'));

        $localidades= Localidades::all();
        $edades=Edades::all();
        $sexos=Sexos::all();
        $civiles=Civiles::all();
        return view("Usuarios.edit",compact('usuario','localidades','sexos','edades','civiles'));





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuario)
    {
        //
        $usuario->update($request->all());
        return redirect("usuarios");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuarios::destroy($id);
        return redirect("usuarios");

        //Usuarios::destroy($usuario->id_usuario);
    }
}
