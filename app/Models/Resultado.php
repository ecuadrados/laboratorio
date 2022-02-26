<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    protected $table = "resultado";
    protected $primaryKey = 'resultado_id';
    // public $timestamps = false;

    protected $fillable = [
        'paciente_documento', 'resultado_fecha', 'token', 'resultado_estado', 'resultado_datos'        
    ];

    protected $hidden = [
        'resultado_id'
    ];
}
