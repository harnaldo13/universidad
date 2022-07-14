<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $profesor = Profesor::all();
        $num = 3;
        
        return view('/Tablas')->with('profesor',$profesor)->with('num',$num);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/ProfeForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfesorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfesorRequest $request)
    {
        
        /*$prof = new Profesor;
        $prof->id = $request->id;
        $prof->nombre = $request->nombre;
        $prof->apellido = $request->apellido;
        $prof->enum = $request->enum;
        $prof->save();
        return response("Dato guardado correctamente",200);*/

        Profesor::create($request->all());

        $num = 1;
        $numin = 3;
        return view('/confirm')->with('num',$num)->with('numin',$numin);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {

        $datos = Profesor::find($profesor->id);

        $num = 3;
        return view('/Mostranding')->with('datos',$datos)->with('num',$num);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        
        $datos = Profesor::find($profesor->id);
        $num = 3;

        return view('/Editanding')->with('datos',$datos)->with('num',$num);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfesorRequest  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {

        $num = 2;
        $numin = 3;
        $profesor->update($request->all());
        return view('/confirm')->with('num',$num)->with('numin',$numin);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        
        $num = 3;
        $numin = 3;

        $eliminar = Profesor::find($profesor->id);
        $eliminar->delete();
        
        $profesor = Profesor::all();
        $num = 3;
        
        return view('/Tablas')->with('profesor',$profesor)->with('num',$num);

    }

    public function buscarPorNombre($nombre){

        $profesores = Profesor::where("nombre","like","%".$nombre."%")->get();
        return dd($profesores);

    }

}
