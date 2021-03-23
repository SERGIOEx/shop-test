<?php


namespace Modules\Checkout\Data\Services;


use App\Core\Exceptions\CreateResourceFailedException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Modules\Checkout\Data\Parameters\OrderParameters;
use Modules\Checkout\Data\Repositories\OrderRepository;

/**
 * Class OrderService
 * @package Modules\Checkout\Data\Services
 */
class OrderService
{
    /**
     * @var OrderRepository
     */
    protected $repository;

    /**
     * BrandService constructor.
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->repository = $orderRepository;
    }

    /**
     * Create Order
     * @param OrderParameters $parameters
     * @param bool $adminNotify
     * @return LengthAwarePaginator|Collection|mixed
     */
    public function createOrder(OrderParameters $parameters, bool $adminNotify = false)
    {
        try {
            return $this->repository->create($parameters->toArray());
        } catch (\Exception $exception) {
            throw (new CreateResourceFailedException())->debug($exception);
        }
    }
}
