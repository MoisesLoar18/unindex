<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Sugerencia extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'usuario';

    protected $fillables = ['descripcion']; 

    public function user(){
    	return $this->belongsTo(Usuario::class);
    }
}
