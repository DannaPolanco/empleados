<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id',
        'ventas',
        'objetivo',
        'fecha'
    ];
}
