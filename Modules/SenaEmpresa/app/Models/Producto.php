<?php

namespace Modules\SenaEmpresa\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\SenaEmpresa\Database\Factories\ProductoFactory;

class producto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "nombre",
        "descripcion",
        "imagen"
    ];

    // protected static function newFactory(): ProductoFactory
    // {
    //     // return ProductoFactory::new();
    // }
}
