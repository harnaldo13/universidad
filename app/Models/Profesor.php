<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{

    use HasFactory;

    protected $table = "profesors";
    protected $primarykey = "id";
    protected $keyTipe = 'string';
    protected $guarded = ['titulo'];
    protected $fillable = ['id','nombre','apellido','titulo'];

    public function impartes(){

        return $this->hasMany('App\Models\Imparte', 'id_profesor');
 
    }

}
