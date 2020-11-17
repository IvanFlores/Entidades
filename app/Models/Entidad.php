<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EntidadTipo;
use App\Models\Pige;
use App\Models\Pislea;

class Entidad extends Model
{
    use HasFactory;
    protected $table = "entidades";

    public function ruta() {
        return "entidad/{$this->id}";
    }

    public function tipo() {
        //$tipo = EntidadTipo::where('id','=',$tipo_id)->get();
        //dd($tipo);
        return $this->belongsTo(EntidadTipo::class);
    }

    public function tipo_entidad() {
        $tipo_entidad=EntidadTipo::where('id','=',$this->tipo_id)->orderBy('id')->first();
        if(is_null($tipo_entidad)) {
            $tipo = 'Tipo no definidio';
        } else {
            $tipo = $tipo_entidad->tipo;
        }
        //dd($tipo);
        return $tipo;
    }

    public static function hijos ($id) {
        $hijos = Entidad::where('id_padre','=',$id)->orderBy('id')->get();
        return $hijos;
    }

    public static function padres ($id) {
        $idpadre = Entidad::where('id','=',$id)->first()->id_padre;
        //dd($idpadre);
        $padres = Entidad::where('id','=',$idpadre)->orderBy('id')->get();
        return $padres;
    }

    public function piges() {
        return Pige::where('entidad_id','=',$this->id)->where('estado','=',1)->get();
        // $this->hasMany(Pige::class,'entidad_id');
    }

    public function pisleas() {
        return Pislea::where('entidad_id','=',$this->id)->where('estado','=',1)->get();
    }

    public function estrategias() {
        return Pige::where('entidad_id','=',0);
        // $this->hasMany(Pige::class,'entidad_id');
    }

    // Query Scope
    public function scopeTipo_id($query, $tipo)
    {
        if($tipo)
            return $query->where('tipo_id',$tipo);
    }
}
