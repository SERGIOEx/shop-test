<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'brand_id', 'name', 'price'];

    protected static function newFactory()
    {
        return \Modules\Catalog\Database\factories\ProductFactory::new();
    }
}
