<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Clase;
use App\Models\Profesor;
use App\Models\Imparte;

use Illuminate\Http\Request;

class RelacionController extends Controller
{

    public function Relacion_clase(Clase $clase){   

        $Todo = Imparte::where('codclase','=',$clase->codclase)->get();

        if(empty($Todo[0]->clases)){

            $num = 0;

            return view('/Relaciones', compact('num'));
        
        }

        $cantidad = count($Todo);

        $num = 1;

        return view('/Relaciones', compact('Todo','cantidad','num'));

    }

    public function Relacion_aula(Aula $aula){

        $Todo = Imparte::where('id_aula','=',$aula->id)->get();

        if(empty($Todo[0]->aulas)){

            $num = 0;

            return view('/Relaciones', compact('num'));
        
        }

        $cantidad = count($Todo);

        $num = 2;

        return view('/Relaciones', compact('Todo','cantidad','num'));

    }

    public function Relacion_profesor(Profesor $profesor){
        
        $Todo = Imparte::where('id_profesor','=',$profesor->id)->get();

        if(empty($Todo[0]->profesors)){

            $num = 0;

            return view('/Relaciones', compact('num'));
        
        }

        $cantidad = count($Todo);

        $num = 3;

        return view('/Relaciones', compact('Todo','cantidad','num'));

    }

}

