<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Dog;


class DogController extends Controller
{
    //


    /**
     * Obtiene un listado de todos los perros almacenados
     * en la base de datos.
     *
     * @return
     */
    function list() {
        //$tableros = Tablero::all();
        //dd($tableros);

        //retornamos una respuesta con formato json
        return response()
            ->json(Dog::all());

    }

    /**
     * Obtiene información sobre un determinado perro.
     * @param  int $id
     * @return
     */
    public function info(int $id)
    {
        return response()
            ->json(Dog::find($id));
    }
}
