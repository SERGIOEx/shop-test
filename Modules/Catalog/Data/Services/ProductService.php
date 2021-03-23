<?php


namespace Modules\Catalog\Data\Services;

use App\Core\Exceptions\CreateResourceFailedException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Modules\Catalog\Data\Parameters\ProductParameters;
use Modules\Catalog\Data\Repositories\ProductRepository;
use Prettus\Validator\Exceptions\ValidatorException;

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

    /**
     * ProductService constructor.
     * @param ProductRepository $productRepository
     */
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
     * Create Product
     * @param ProductParameters $parameters
     * @return LengthAwarePaginator|Collection|mixed
     */
    public function createProduct(ProductParameters $parameters)
    {
        try {
            return $this->repository->create($parameters->toArray());
        } catch (\Exception $exception) {
            throw (new CreateResourceFailedException())->debug($exception);
        }
    }

    /**
     * Find product by id
     * NOTICE: if used api, need added exception block; otherwise you will get a 404 page
     * @param int $pid
     * @return LengthAwarePaginator|Collection|mixed
     */
    public function findProductById(int $pid)
    {
        return $this->repository->find($pid);
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
