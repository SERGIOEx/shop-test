<?php


namespace Modules\Checkout\Data\Parameters;


use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class OrderParameters
 * @package Modules\Checkout\Data\Parameters
 */
class OrderParameters extends DataTransferObject
{
    public $total_product_value;

    public $total_shipping_value;

    public $client_name;

    public $client_address;
}

