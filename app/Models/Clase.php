<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{

    use HasFactory;

    protected $table = "clases";
    protected $primaryKey = 'codclase';
    protected $keyType = 'string';
    protected $fillable = ['codclase','nombre','credito'];

    public function impartes(){

       return $this->hasMany('App\Models\Imparte', 'codclase');

    }

}
