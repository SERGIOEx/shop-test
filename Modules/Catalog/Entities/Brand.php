<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    protected static function newFactory()
    {
        return \Modules\Catalog\Database\factories\BrandFactory::new();
    }
}
