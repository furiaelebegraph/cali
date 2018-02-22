<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    function nivel(){
    	return $this->belongsTo(Nivel::class, 'nivel_id');
    }
    public static function obtenerImagenes($id){
    	return Galeria::where('nivel_id', '=', $id)->select('imagen','id', 'nombre')->orderBy('orden', 'asc')->get();
    }
	protected $table = 'galeria';
    protected $fillable = [
        'nombre','imagen', 'nivel_id', 'orden', 'activo'
    ];
}
