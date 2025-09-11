<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Blog\Database\Factories\TareaFactory;

class Tarea extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ["titulo"];

    // protected static function newFactory(): TareaFactory
    // {
    //     // return TareaFactory::new();
    // }
}
