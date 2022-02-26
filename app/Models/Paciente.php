<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = "paciente";
    protected $primaryKey = 'paciente_id';
    // public $timestamps = false;

    protected $fillable = [
        'paciente_nombre', 'paciente_nombre1', 'paciente_nombre2', 'paciente_apellido1', 'paciente_apellido2',
        'paciente_tipo_documento', 'paciente_documento', 'paciente_fecha_nacimiento', 'paciente_sexo', 'paciente_edad',
        'paciente_barrio', 'paciente_direccion', 'paciente_telefono', 'paciente_celular', 'paciente_email',
        'paciente_estado', 'fecha_actualizacion'
    ];

    protected $hidden = [
        'paciente_id'
    ];
}
