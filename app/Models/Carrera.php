<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'carreras'; // Si no sigues la convención de nombres de Laravel

    protected $primaryKey = 'id_carrera';

    public $timestamps = false; // Si no tienes created_at y updated_at

    protected $fillable = ['carrera'];

    public function universidades()
    {
        return $this->hasMany(Universidad::class, 'id_carrera');
    }
}