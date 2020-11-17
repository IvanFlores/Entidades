<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntidadTipo;
use App\Models\EstandarTipo;

class EntidadesTipoController extends Controller
{
    public function lista()
    {
        $tipos = EntidadTipo::orderBy('id')->get();
        return view('entidadestipo', ['tipos' => $tipos]);
    }

    public function entidades ()
    {
        return $this->hasMany(Entidad::class,'tipo_id');
    }

    public function lista_estandares()
    {
        $categorias = EstandarTipo::orderBy('id')->get();
        return view('estandarcategorias', ['categorias' => $categorias]);
    }

}
