<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Http\Requests\StoreAulaRequest;
use App\Http\Requests\UpdateAulaRequest;
use Illuminate\Support\Facades\Gate;
class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $aula = Aula::all();
        $num = 2;
        
        return view('/Tablas')->with('aula',$aula)->with('num',$num);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::Allows('create-persona')){
            return view('/AulaForm');
        }
        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAulaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAulaRequest $request)
    {
        
   

        Aula::create($request->all());
        
        $num = 1;
        $aula = Aula::all();
        $num = 2;
        return view('/Tablas')->with('aula',$aula)->with('num',$num);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show(Aula $aula)
    {
        
        $datos = Aula::find($aula->id);

        $num = 2;
        return view('/Mostranding')->with('datos',$datos)->with('num',$num);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit(Aula $aula)
    {
        if(Gate::Allows('create-persona')){
            $datos = Aula::find($aula->id);
            $num = 2;

            return view('/Editanding')->with('datos',$datos)->with('num',$num);
        }
        return redirect('/login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAulaRequest  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAulaRequest $request, Aula $aula)
    {

        $num = 2;
        $numin = 2;
        $aula->update($request->all());
       
        return view('/confirm')->with('num',$num)->with('numin',$numin);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula $aula)
    {
        if(Gate::Allows('create-persona')){
            $num = 3;
            $numin = 2;

            $eliminar = Aula::find($aula->id);
            $eliminar->delete();
            
            $aula = Aula::all();
            $num = 2;
            
            return view('/Tablas')->with('aula',$aula)->with('num',$num);
        }
        return redirect('/login');

    }

    public function buscarPorNombre($nombre){

        $aulas = Aula::where("nombre","like","%".$nombre."%")->get();
        return dd($aulas);

    }

}
