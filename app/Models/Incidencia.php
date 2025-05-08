<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $table = 'incidencias';
    protected $primaryKey = 'id_incidencia';
    public $timestamps = false;
    protected $fillable = ['id_estudiante', 'hora_incidente', 'fecha_incidente', 'lugar_incidente', 'descripcion_incidente', 'acuerdos', 'observaciones'];


    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
}