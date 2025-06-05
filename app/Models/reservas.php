<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    public function usuario() {
        return $this->belongsTo(usuarios::class, 'usuario_id');
    }

    public function servicio() {
        return $this->belongsTo(servicios::class, 'serv_id');
    }

    public function zona() {
        return $this->belongsTo(zonas::class, 'zona_id');
}

}
