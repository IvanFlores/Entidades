<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SoftwareCategoria;
use App\Models\SoftwareFuncionalidad;

class Software extends Model
{
    use HasFactory;
    public function ruta() {
        return "/software/{$this->id}";
    }

    public function categoria() {
        return SoftwareCategoria::where('id','=',$this->categoria_id)->first();
    }

    public function funcionalidad() {
        return SoftwareFuncionalidad::where('id','=',$this->funcionalidad_id)->first();
    }

    // Query Scope
    public function scopeCategoria_id($query, $categoria)
    {
        if($categoria)
            return $query->where('categoria_id',$categoria);
    }
}
