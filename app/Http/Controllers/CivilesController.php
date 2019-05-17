<?php

namespace App\Http\Controllers;

use App\Civiles;
use Illuminate\Http\Request;

class CivilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $civiles=Civiles::orderby('id_estadoc')->get();
        return view("Civiles.index", compact('civiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Civiles.create");
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
        $civil=array('descripcion'=>$request->descripcion);

        Civiles::create($civil);
        return redirect("civiles");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Civiles  $civiles
     * @return \Illuminate\Http\Response
     */
    public function show(Civiles $civiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Civiles  $civiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Civiles $civil)
    {
        //
        return view("Civiles.edit",compact('civil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Civiles  $civiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civiles $civil)
    {
        //
        $civil->update($request->all());
        return redirect("civiles");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Civiles  $civiles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Civiles::destroy($id);
        return redirect("civiles");
    }
}
