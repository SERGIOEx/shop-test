<?php


namespace Modules\Catalog\Data\Services;


use App\Core\Exceptions\CreateResourceFailedException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Modules\Catalog\Data\Repositories\BrandRepository;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class BrandService
 * @package Modules\Catalog\Data\Services
 */
class BrandService
{
    /**
     * @var BrandRepository
     */
    protected $repository;

    /**
     * BrandService constructor.
     * @param BrandRepository $brandRepository
     */
    public function __construct(BrandRepository $brandRepository)
    {
        $this->repository = $brandRepository;
    }

    /**
     * Create Brand
     * @param string $name
     * @return LengthAwarePaginator|Collection|mixed
     */
    public function createBrand(string $name)
    {
        try {
            return $this->repository->create(['name' => $name]);
        } catch (\Exception $exception) {
            throw (new CreateResourceFailedException())->debug($exception);
        }
    }

}
