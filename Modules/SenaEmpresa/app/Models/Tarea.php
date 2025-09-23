<?php

namespace Modules\SenaEmpresa\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\SenaEmpresa\Database\Factories\TareaFactory;

class Tarea extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "nombre",
        "descripcion"
    ];

    // protected static function newFactory(): TareaFactory
    // {
    //     // return TareaFactory::new();
    // }
}
