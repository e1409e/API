<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    use HasFactory;

    protected $table = 'representantes';
    protected $primaryKey = 'id_representante';
    public $timestamps = false;
    protected $fillable = ['id_estudiante', 'nombre_repre', 'parentesco', 'cedula_repre', 'telefono_repre', 'correo_repre', 'lugar_nacimiento', 'fecha_nacimiento', 'direccion', 'ocupacion', 'lugar_trabajo', 'estado', 'municipio', 'departamento', 'estado_civil'];


    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
}