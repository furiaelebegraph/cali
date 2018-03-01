<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    function galeria(){
    	return $this->hasMany(Galeria::class);
    }
    protected $table = 'nivel';
    protected $fillable = [
        'titulo','imagen', 'poster','video', 'videomobil', 'icono', 'orden', 'descripcion', 'testimonio', 'minitestimonio'
    ];
}
