<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    public function categoria() {
        return $this->belongsTo(categorias::class, 'id_cat');
    }

}
