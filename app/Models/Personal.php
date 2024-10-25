<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Personal extends Authenticatable
{
    use Notifiable;

    protected $table = 'personal'; // Asegúrate de que coincida con tu tabla de base de datos

    // Define la clave primaria de la tabla
    protected $primaryKey = 'id_personal';

    protected $fillable = [
        'nombre', 'apellido', 'usuario', 'password', 'rol', 'estado', 'creado_por', 'fecha_creacion',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Si tienes algún campo de fechas personalizado
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Define que no estás usando incrementing (si tu id no es de tipo entero autoincremental)
    public $incrementing = true; // si tu id es autoincremental, mantenlo en true; cámbialo a false si no lo es

    // Define el tipo de tu clave primaria (si es un entero o UUID, por ejemplo)
    protected $keyType = 'int'; // Usa 'int' si es un entero
}
