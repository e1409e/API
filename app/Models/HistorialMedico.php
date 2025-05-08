<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    use HasFactory;

    protected $table = 'historial_medico';
    protected $primaryKey = 'id_historialmedico';
    public $timestamps = false;
    protected $fillable = ['id_estudiante', 'certificado_conapdis', 'informe_medico', 'tratamiento'];


    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
}