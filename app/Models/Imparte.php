<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imparte extends Model
{

    use HasFactory;

    protected $table = "impartes";
    protected $foreignkey = "codclase";
    protected $foreignkey2 = "id_aula";
    protected $foreignkey3 = "id_profesor";
    protected $fillable = ['codclase','id_aula','id_profesor'];

    public function clases(){

        return $this->belongsTo('App\Models\Clase', 'codclase');

    }

    public function aulas(){

        return $this->belongsTo('App\Models\Aula', 'id_aula');

    }

    public function profesors(){

        return $this->belongsTo('App\Models\Profesor', 'id_profesor');

    }

}
