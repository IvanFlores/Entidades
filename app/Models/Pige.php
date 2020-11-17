<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pige extends Model
{
    use HasFactory;

    public function ruta() {
        return "/pige/{$this->id}";
    }

    public function entidad() {
        return Entidad::where('id','=',$this->entidad_id)->first();
        // $this->hasMany(Pige::class,'entidad_id');
    }
}
