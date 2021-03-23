<?php

namespace Modules\Checkout\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * FIXME: need take the client into a separate entity; use (client_id) and relation
 * Class Order
 * @package Modules\Checkout\Entities
 * @property int id
 * @property int total_product_value
 * @property int total_shipping_value
 * @property string client_name
 * @property string client_address
 */
class Order extends Model
{
    protected $fillable = ['id', 'product_id', 'total_product_value', 'total_shipping_value', 'client_name', 'client_address'];
}
