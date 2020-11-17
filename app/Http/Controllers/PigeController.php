<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pige;
use App\Models\PigeDetalle;
use App\Models\PigeLinea;

class PigeController extends Controller
{
    /*public function mostrar(Pige $pige)
    {
        return view('/pige', compact('pige'));
    }*/

    public function mostrar(Pige $pige)
    {
        $pige_detalle=PigeDetalle::where('pige_id','=',$pige->id)->get();
        $pige_lineas=PigeLinea::orderBy('id')->get();
        return view('/pige', ['pige' => $pige,'pige_detalle' => $pige_detalle,'pige_lineas' => $pige_lineas]);
    }
}
