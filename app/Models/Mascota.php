<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table="mascotas";
    protected $primaryKey="id";
    public $incremeting = true;
    public $timestamps=true;

    public $fillable=[
        'nombre',
        'edad',
        'sexo',
        'created_at',
        'updated_at'
    ];
}
