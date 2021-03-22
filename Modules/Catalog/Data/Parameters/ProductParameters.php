<?php


namespace Modules\Catalog\Data\Parameters;


use Spatie\DataTransferObject\DataTransferObject;

class ProductParameters extends DataTransferObject
{
    public $name;

    public $price;

    public $brand_id;
}

