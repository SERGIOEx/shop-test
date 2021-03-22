<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 * @package Modules\Catalog\Entities
 * @property int id
 * @property string name
 */
class Brand extends Model
{
    protected $fillable = ['id', 'name'];

    public $timestamps = false;
}
