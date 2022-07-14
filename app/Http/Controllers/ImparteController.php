<?php

namespace App\Http\Controllers;

use App\Models\Imparte;
use App\Http\Requests\StoreImparteRequest;
use App\Http\Requests\UpdateImparteRequest;

class ImparteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $imparte = Imparte::all();
        $num = 4;
        
        return view('/Tablas')->with('imparte',$imparte)->with('num',$num);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/ImparteForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImparteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImparteRequest $request)
    {
        
        Imparte::create($request->all());
        $num = 1;
        $numin = 4;
        return view('/Mostranding')->with('num',$num)->with('numin',$numin);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imparte  $imparte
     * @return \Illuminate\Http\Response
     */
    public function show(Imparte $imparte)
    {
        return dd($imparte);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imparte  $imparte
     * @return \Illuminate\Http\Response
     */
    public function edit(Imparte $imparte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImparteRequest  $request
     * @param  \App\Models\Imparte  $imparte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImparteRequest $request, Imparte $imparte)
    {
        
        $imparte->update($request->all());
        return response("Dato actualizado correctamente",200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imparte  $imparte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imparte $imparte)
    {
        
        $imparte->delete();
        return response("Dato eliminado",200);

    }

    public function buscarPorNombre($nombre){

        $impartes = Imparte::where("nombre","like","%".$nombre."%")->get();
        return dd($impartes);

    }

}
