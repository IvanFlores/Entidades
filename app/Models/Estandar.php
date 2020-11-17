<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EstandarTipo;

class Estandar extends Model
{
    use HasFactory;
    protected $table = "estandares";

    public function ruta() {
        return "estandar/{$this->id}";
    }

    public function categoria() {
        $categoria=EstandarTipo::where('id','=',$this->categoria_id)->orderBy('id')->first();
        if(is_null($categoria)) {
            $categ = 'Categoría no registrada';
        } else {
            $categ = $categoria->categoria;
        }
        //dd($tipo);
        return $categ;
    }

    // Query Scope
    public function scopeCategoria_id($query, $categoria)
    {
        if($categoria)
            return $query->where('categoria_id',$categoria);
    }
}
