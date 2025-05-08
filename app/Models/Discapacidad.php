<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    use HasFactory;

    protected $table = 'discapacidades';
    protected $primaryKey = 'discapacidad_id';
    public $timestamps = false;
    protected $fillable = ['discapacidad'];


    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'discapacidad_id');
    }
}