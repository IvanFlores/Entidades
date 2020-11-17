<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Entidad;
use App\Models\EntidadTipo;
use App\Models\Estandar;
use App\Models\EstandarTipo;

class EntidadesController extends Controller
{
    public function mostrar(Entidad $entidad)
    {
        //dd($entidad);
        $hijos = $entidad->hijos($entidad->id);
        $padres = $entidad->padres($entidad->id);
        return view('/entidad', ['entidad' => $entidad,'hijos' => $hijos,'padres' => $padres]);
    }

    public function mostrar_estandar(Estandar $estandar)
    {
        return view('estandar', compact('estandar'));
    }

    public function lista(Request $request)
    {
        $tipo=$request->get('tipo');
        $entidades = Entidad::orderBy('id')->where('tipo_id','>',0)->tipo_id($tipo)->get();
        $tipos = EntidadTipo::orderBy('id')->get();
        return view('entidades_lista', ['entidades' => $entidades,'tipos' => $tipos]);
    }

    public function catalogo(Request $request)
    {
        $categoria=$request->get('categoria');
        $estandares = Estandar::orderBy('id')->categoria_id($categoria)->get();
        $tipos = EstandarTipo::orderBy('id')->get();
        return view('catalogo', ['estandares' => $estandares,'tipos' => $tipos]);
    }

    public function organigrama()
    {
        // Obtiene el nodo raíz.
        $nodo[0]=Entidad::orderBy('id_padre')->take(1)->get();
        $anodo[0] = $nodo[0]->toArray();
        $id = Arr::get($anodo[0], '0.id');
        $sigla = Arr::get($anodo[0], '0.sigla');
        $denominacion = Arr::get($anodo[0], '0.denominacion');
        $estructura[0] = "'id':'n".$id."', 'name': '".$sigla."', 'title': '".$denominacion."','relationship': '001',";

        // Llena los hijos de casa nodo.
        $cantidad = Entidad::orderBy('id_padre')->count();
        $nodos=Entidad::orderBy('id_padre')->get();
        $i = 0;
        foreach ($nodos as $nodo)
            {
                $aonodo = $nodo->toArray();
                $idPadre = $nodo->id;
                $totalhijos = Entidad::hijos($idPadre);
                if ($totalhijos->count()>0) {
                    $i = $i+1;
                    $ahijos[$i] = $totalhijos->toArray();
                    $hijos[$i] = [];
                    foreach ($ahijos[$i] as $ahijo)
                        {
                            $idHijo = Arr::get($ahijo, 'id');
                            $siglaHijo = Arr::get($ahijo, 'sigla');
                            $denHijo = Arr::get($ahijo, 'denominacion');
                            if ($hijos[$i] === []) {
                                $hijos[$i] = "{"."'id':'n".$idHijo."', 'name': '".$siglaHijo."', 'title': '".$denHijo."','relationship': '111'},";
                            } else{
                                $hijos[$i] = $hijos[$i]."{"."'id':'n".$idHijo."', 'name': '".$siglaHijo."', 'title': '".$denHijo."','relationship': '111'},";
                            }
                        }
                    $hijos[$i]="$.mockjax({url: '/orgchart/children/n$idPadre',contentType: 'application/json',responseTime: 500,responseText: {'children': [".$hijos[$i]."]}});";
                }
            }
        $entidades = Entidad::orderBy('id_padre')->get();
        return view('organigrama', ['estructura' => $estructura, 'hijos' => $hijos, 'entidades' => $entidades]);
    }

    public function estructuraoknivel1()
    {
        $nodo[0]=Entidad::orderBy('id_padre')->take(1)->get();
        $anodo[0] = $nodo[0]->toArray();
        $id = Arr::get($anodo[0], '0.id');
        $sigla = Arr::get($anodo[0], '0.sigla');
        $denominacion = Arr::get($anodo[0], '0.denominacion');
        $hijos[0]="'children': [";
        $estructura[0] = "'id':'n".$id."', 'name': '".$sigla."', 'title': '".$denominacion."','relationship': '001',";
        $totalhijos = Entidad::hijos($id);
        $ahijos[0] = $totalhijos->toArray();
        foreach ($ahijos[0] as $ahijo)
            {
                $idHijo= Arr::get($ahijo, 'id');
                $siglaHijo= Arr::get($ahijo, 'sigla');
                $denHijo = Arr::get($ahijo, 'denominacion');
                $hijos[0] = $hijos[0]."{"."'id':'n".$idHijo."', 'name': '".$siglaHijo."', 'title': '".$denHijo."','relationship': '111'},";
            }
        $hijos[0]=$hijos[0]."]";
        $entidades = Entidad::orderBy('id_padre')->get();
        return view('orgchart', ['estructura' => $estructura, 'hijos' => $hijos, 'entidades' => $entidades]);
    }
    public function estructuraz()
    {
        $nodoRaiz=Entidad::orderBy('id_padre')->take(1)->get();
        $raiz = $nodoRaiz->toArray();
        $id = Arr::get($raiz, '0.id');
        $sigla = Arr::get($raiz, '0.sigla');
        $denominacion = Arr::get($raiz, '0.denominacion');
        $hijos="'children': ";
        $estructura = "'id':'n".$id."', 'name': '".$sigla."', 'title': '".$denominacion."','relationship': '111',";
        $totalhijos = Entidad::hijos($id);
        dd($totalhijos);
        $ahijos = $totalhijos->toArray();
            $idHijo= Arr::get($ahijos, '0.id');
            $siglaHijo= Arr::get($ahijos, '0.sigla');
            $denHijo = Arr::get($ahijos, '0.denominacion');
        $hijos = $hijos."[{"."'id':'n".$idHijo."', 'name': '".$siglaHijo."', 'title': '".$denHijo."','relationship': '110'}]";
        $totalhijos2 = Entidad::hijos($idHijo);
        dd($totalhijos2);
        $hijos2 = "";
        $entidades = Entidad::orderBy('id_padre')->get();
        return view('orgchart', ['estructura' => $estructura, 'hijos' => $hijos, 'hijos2' => $hijos2, 'entidades' => $entidades]);
    }
    public function estructuray()
    {
        $nodoRaiz=Entidad::orderBy('id_padre')->take(1)->get();
        $raiz = $nodoRaiz->toArray();
        $id = Arr::get($raiz, '0.id');
        $sigla = Arr::get($raiz, '0.sigla');
        $denominacion = Arr::get($raiz, '0.denominacion');
        $estructura = "'id':".$id.", 'name': '".$sigla."', 'title': '".$denominacion."',";
        $hijos = Entidad::hijos($id);
        $entidades = Entidad::orderBy('id_padre')->get();
        return view('orgchart', ['estructura' => $estructura,'entidades' => $entidades]);
    }
    public function estructurax()
    {
        $nodoRaiz=Entidad::orderBy('id_padre')->take(1)->get();
        $raiz = $nodoRaiz->toArray();
        $id = Arr::get($raiz, '0.id');
        $estructura=$estructura.preOrden($id).'-';
        $entidades = Entidad::orderBy('id_padre')->get();
        return view('orgchart', ['estructura' => $estructura,'entidades' => $entidades]);
    }

    public function est_google()
    {
        $entidades = Entidad::orderBy('id')->get();
        return view('google', ['entidades' => $entidades]);
    }
}
