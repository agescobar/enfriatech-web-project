<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    public function reservas() {
    return $this->hasMany(reservas::class, 'usuario_id');
}

}

