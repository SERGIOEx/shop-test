<?php


namespace Modules\Catalog\Data\Parameters;


use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class ProductParameters
 * @package Modules\Catalog\Data\Parameters
 */
class ProductParameters extends DataTransferObject
{
    public $name;

    public $price;

    public $brand_id;
}

