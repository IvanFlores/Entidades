<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PigeLinea;

class PigeDetalle extends Model
{
    use HasFactory;
    protected $table = "pige_detalle";

    public function linea() {
        $linea_pige = PigeLinea::where('id','=',$this->linea_id)->first();
        if(is_null($linea_pige)) {
            $linea = 'Línea no registrada';
        } else {
            $linea = $linea_pige->linea;
        }
        return $linea;
    }

    public function linea_rev() {
        $linea_pige = PigeLinea::where('id','=',$this->linea_rev_id)->first();
        if(is_null($linea_pige)) {
            $linea = 'Línea revisada no registrada';
        } else {
            $linea = $linea_pige->linea;
        }
        return $linea;
    }
}
