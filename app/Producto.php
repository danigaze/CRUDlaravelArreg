<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre','clasificacion','marca'];

    public function scopeNombre($query, $nombre){

       if(trim($nombre) != ""){

           $query->where('nombre',"LIKE", "%$nombre%");

       }


    }

    public function scopeMarca($query, $marca){

        $marcas = config('options.marcas');

        if($marca != "" && isset($marcas[$marca])){
            $query->where('marca', $marca);
        }


    }

    public static function filterAndPaginate($nombre, $marca){

       return Producto::nombre($nombre)
           ->marca($marca)
           ->orderBy('id','DESC')
           ->paginate(15);

    }
    // $query->where(\DB::raw("CONCAT(nombre, '', clasificacion, '', marca)"), $nombre);
    //Se usa condo hay un apellido o segundo nombre
}

