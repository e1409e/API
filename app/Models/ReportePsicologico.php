<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportePsicologico extends Model
{
    use HasFactory;

    protected $table = 'reporte_psicologico';
    protected $primaryKey = 'id_psicologico';
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido', 'lugar_nacimiento', 'fecha_nacimiento', 'nivel_instruccion', 'motivo_consulta', 'sintesis_diagnostica', 'recomendaciones', 'id_estudiante'];


    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
}