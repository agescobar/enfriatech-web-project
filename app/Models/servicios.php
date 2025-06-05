<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    public function reservas() {
        return $this->hasMany(reservas::class, 'serv_id');
    }

}
