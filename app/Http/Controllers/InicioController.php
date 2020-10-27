<?php

namespace App\Http\Controllers;

use App\CategoriaReceta;
use App\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InicioController extends Controller
{
    //
    public function index()
    {

        //Obtener las recetas mas nuevas
        $nuevas = Receta::latest()->take(6)->get();

        // Obtener todas las categorias
        $categorias = CategoriaReceta::all();

//        return $categorias;


        // Agrupar las recetas por categoria
        $recetas = [];

        foreach($categorias as $categoria) {
            $recetas[ Str::slug( $categoria->nombre ) ][] = Receta::where('categoria_id', $categoria->id )->take(3)->get();
        }

//        return $recetas;

        return view('inicio.index', compact('nuevas', 'recetas'));
    }
}
