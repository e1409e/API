<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';
    public $timestamps = false;
    protected $fillable = ['nombres', 'apellidos', 'cedula', 'telefono', 'correo', 'discapacidad_id', 'fecha_nacimiento', 'observaciones', 'seguimiento', 'fecha_registro'];


    public function discapacidad()
    {
        return $this->belongsTo(Discapacidad::class, 'discapacidad_id');
    }

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_estudiante');
    }

    public function historialMedico()
    {
        return $this->hasOne(HistorialMedico::class, 'id_estudiante');
    }

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class, 'id_estudiante');
    }

    public function reportePsicologico()
    {
        return $this->hasOne(ReportePsicologico::class, 'id_estudiante');
    }

    public function representantes()
    {
        return $this->hasMany(Representante::class, 'id_estudiante');
    }

    public function universidades()
    {
        return $this->hasMany(Universidad::class, 'id_estudiante');
    }
}