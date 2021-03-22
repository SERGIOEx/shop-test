<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Product
 * @package Modules\Catalog\Entities
 * @property int id
 * @property int brand_id
 * @property string name
 * @property int price
 */
class Product extends Model
{
    protected $fillable = ['id', 'brand_id', 'name', 'price'];

    /**
     * Get Brand
     * @return BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
