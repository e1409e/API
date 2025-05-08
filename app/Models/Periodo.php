<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = 'periodos';
    protected $primaryKey = 'id_periodo';
    public $timestamps = false;
    protected $fillable = ['periodo'];


    public function universidades()
    {
        return $this->hasMany(Universidad::class, 'id_periodo');
    }
}