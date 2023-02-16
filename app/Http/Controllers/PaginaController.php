<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function canciones($id = null) {
        $lista_canciones = [];
        $lista_canciones[] = ['nombre'=> 'Hola', 'artista' => 'Yo'];
        $lista_canciones[] = ['nombre'=> 'Adios', 'artista' => 'Alguien'];
        $lista_canciones[] = ['nombre'=> 'Bye', 'artista' => 'Perenganito'];

        //dd($lista_canciones);

        if(!is_null($id)) {
            $cancion_sel = $lista_canciones[$id];
        } else {
            $cancion_sel = null;
        }

        //$cancion_seleccionada = $lista_canciones[$id];
        

        return view('canciones', compact('lista_canciones', 'cancion_sel'));
    }

    public function contacto() {
        return view('contacto');
    }

    public function bautizo(Request $request) {
        
        //dd($request-> all(), $request->input('codigo'), $request->nombre);
        $request->validate([
            'nombre' => 'required|max:15',
            'codigo' => 'required|min:5|max:10'  
        ]);
    }
}