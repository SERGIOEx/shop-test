<?php


namespace Modules\Checkout\Data\Parameters;


use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class OrderParameters
 * @package Modules\Checkout\Data\Parameters
 */
class OrderParameters extends DataTransferObject
{
    protected $ignoreMissing = true;

    public $total_product_value;

    public $total_shipping_value = 300;

    public $client_name;

    public $client_address;

    public $product_id;
}

