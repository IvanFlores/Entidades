<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pislea extends Model
{
    use HasFactory;
    public function ruta() {
        return "/pislea/{$this->id}";
    }

    public function entidad() {
        return Entidad::where('id','=',$this->entidad_id)->first();
    }
}
