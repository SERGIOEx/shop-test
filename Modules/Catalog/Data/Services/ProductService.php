<?php


namespace Modules\Catalog\Data\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Modules\Catalog\Data\Repositories\ProductRepository;

/**
 * Class ProductService
 * @package Modules\Catalog\Data\Services
 */
class ProductService
{

    /**
     * @var ProductRepository
     */
    protected $repository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    /**
     * Get All
     * @param bool $withBrand
     * @param string $limit
     * @param string $orderBy
     * @param string $sortBy
     * @return LengthAwarePaginator|Collection|mixed
     */
    public function getAll($withBrand = false, $limit = '*', $orderBy = 'id', $sortBy = 'desc')
    {
        $withBrand ? $this->brandRel() : null;
        return $this->repository->orderBy($orderBy, $sortBy)->paginate($limit);
    }

    /**
     * Get Brands: Eager Loading
     * @return ProductRepository
     */
    private function brandRel()
    {
        return $this->repository->with('brand');
    }

}
