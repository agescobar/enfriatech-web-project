<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    public function productos() {
        return $this->hasMany(productos::class, 'id_cat');
    }

}
