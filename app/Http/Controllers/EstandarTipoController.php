<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstandarTipo;

class EstandarTipoController extends Controller
{
    public function lista()
    {
        $categorias = EstandarTipo::orderBy('id')->get();
        return view('estandarcategorias', ['categorias' => $categorias]);
    }
}
