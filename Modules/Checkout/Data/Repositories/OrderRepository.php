<?php


namespace Modules\Checkout\Data\Repositories;


use Modules\Checkout\Entities\Order;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class OrderRepository
 * @package Modules\Checkout\Data\Repositories
 */
class OrderRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Order::class;
    }
}
