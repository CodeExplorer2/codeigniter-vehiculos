<?php

namespace App\Controllers;

class Paises extends BaseController
{
   

    /**
     * Funcion de coches
     *
     */

    public function Paises(): string
    {
        $datos ['titulo'] = 'Paises';
        $datos ['seleccionado']= 'Paises';
        return view('templates/head', $datos) .
               view('templates/header').
               view('content/menu-lateral').
               view('content/Inicio').
               view('templates/footer');
    }

    public function Australia(): string
    {
        $datos ['titulo'] = 'Paises';
        $datos ['seleccionado']= 'Australia';
        return view('templates/head', $datos) .
               view('templates/header').
               view('content/menu-lateral').
               view('content/Australia').
               view('templates/footer');
    }

    public function Dubái(): string
    {
        $datos ['titulo'] = 'Paises';
        $datos ['seleccionado']= 'Dubái';
        return view('templates/head', $datos) .
               view('templates/header').
               view('content/menu-lateral').
               view('content/Dubái').
               view('templates/footer');
    }

    public function Colombia(): string
    {
        $datos ['titulo'] = 'Paises';
        $datos ['seleccionado']= 'Colombia';
        return view('templates/head', $datos) .
               view('templates/header').
               view('content/menu-lateral').
               view('content/Colombia').
               view('templates/footer');
    }
    
    public function Puerto_Rico(): string
    {
        $datos ['titulo'] = 'Paises';
        $datos ['seleccionado']= 'Puerto';
        return view('templates/head', $datos) .
               view('templates/header').
               view('content/menu-lateral').
               view('content/Puerto_Rico').
               view('templates/footer');
    }
}       