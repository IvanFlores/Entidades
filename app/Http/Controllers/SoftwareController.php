<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software;
use App\Models\SoftwareCategoria;

class SoftwareController extends Controller
{
    public function mostrar(Software $software)
    {
        return view('software', compact('software'));
    }

    public function lista(Request $request)
    {
        $categoria=$request->get('categoria');
        $software = Software::orderBy('id')->where('categoria_id','>',0)->categoria_id($categoria)->get();
        $categorias = SoftwareCategoria::orderBy('id')->get();
        //dd($categorias);
        return view('software_lista', ['software' => $software,'categorias' => $categorias]);
    }

    public function lista_recomendada(Request $request)
    {
        $categoria=$request->get('categoria');
        $software = Software::orderBy('categoria_id')->orderBy('recomendacion','desc')->where('categoria_id','>',0)->where('recomendacion','>',0)->categoria_id($categoria)->get();
        $categorias = SoftwareCategoria::orderBy('id')->get();
        return view('software_recomendado', ['software' => $software,'categorias' => $categorias]);
    }
}
