<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    protected $table = 'facultades';
    protected $primaryKey = 'id_facultad';
    public $timestamps = false;
    protected $fillable = ['facultad', 'siglas'];


    public function universidades()
    {
        return $this->hasMany(Universidad::class, 'id_facultad');
    }
}