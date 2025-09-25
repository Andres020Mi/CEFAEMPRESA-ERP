<?php

namespace Modules\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Test\Database\Factories\ProductoTestFactory;

class ProductoTest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "nombre",
        "descripcion",
    ];

    // protected static function newFactory(): ProductoTestFactory
    // {
    //     // return ProductoTestFactory::new();
    // }
}
