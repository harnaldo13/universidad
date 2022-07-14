<?php

namespace App\Http\Controllers;
use App\Models\Clase;
use App\Http\Requests\StoreClaseRequest;
use App\Http\Requests\UpdateClaseRequest;
use Illuminate\Support\Facades\Auth;
class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clase = Clase::all();
        $num = 1;
        
        return view('/Tablas')->with('clase',$clase)->with('num',$num);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        if(Auth::check()){ 
        if(Auth::user()->can('create', Clase::class)){
            return view('/ClaseForm');
        }
        
        }
        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClaseRequest $request)
    {
            Clase::create($request->all());

                $num = 1;
                $numin = 1;
                $clase = Clase::all();
                $num = 1;
                
                return view('/Tablas')->with('clase',$clase)->with('num',$num);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show(Clase $clase)
    {

        $datos = Clase::find($clase->codclase);

        $num = 1;
        return view('/Mostranding')->with('datos',$datos)->with('num',$num);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit(Clase $clase)
    {
        
        $datos = Clase::find($clase->codclase);
        $num = 1;

        return view('/Editanding')->with('datos',$datos)->with('num',$num);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClaseRequest  $request
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClaseRequest $request, Clase $clase)
    {
        
        $num=2;
        $numin=1;
        $clase->update($request->all());
        $num = 1;
        return view('/confirm')->with('num',$num)->with('numin',$numin);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clase $clase)
    {
        if(Auth::check()){ 
            if(Auth::user()->can('delete', Clase::class)){
                $num = 3;
                $numin = 1;

                $eliminar = Clase::find($clase->codclase);
                $eliminar->delete();
                $clase = Clase::all();
                $num = 1;
                
                return view('/Tablas')->with('clase',$clase)->with('num',$num);
            }
            return redirect('/login');
        }
    
    }

    public function buscarPorNombre(Request $nombre){

        $clases = Clase::where("nombre","like","%".$nombre."%")->get();
        return dd($clases);

    }

}
