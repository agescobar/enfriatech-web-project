<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class usuarios extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'clave',
        'rol',
    ];

    protected $hidden = [
        'clave',
    ];

    public function getAuthPassword()
    {
        return $this->clave;
    }
}
