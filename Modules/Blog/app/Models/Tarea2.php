<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Blog\Database\Factories\Tarea2Factory;

class Tarea2 extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "titulo"
    ];

    // protected static function newFactory(): Tarea2Factory
    // {
    //     // return Tarea2Factory::new();
    // }
}
