<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{

    use HasFactory;

    protected $table = "aulas";
    protected $primarykey = "id";
    protected $fillable = ['nombre','ubicacion'];

    public function impartes(){

        return $this->hasMany('App\Models\Imparte', 'id_aula');
 
    }

}
