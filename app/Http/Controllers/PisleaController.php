<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pislea;
use App\Models\PisleaEstructura;
use App\Models\PisleaDetalle;

class PisleaController extends Controller
{
    public function mostrar(Pislea $pislea)
    {
        $pislea_estructura=PisleaEstructura::where('estado','=',1)->get();
        $pislea_detalle=PisleaDetalle::where('pislea_id','=',$pislea->id)->get();
        return view('/pislea', ['pislea' => $pislea,'pislea_detalle' => $pislea_detalle,'pislea_estructura' => $pislea_estructura]);
    }
}
