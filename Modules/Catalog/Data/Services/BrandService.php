<?php


namespace Modules\Catalog\Data\Services;


use Modules\Catalog\Data\Repositories\BrandRepository;

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

    public function __construct(BrandRepository $brandRepository)
    {
        $this->repository = $brandRepository;
    }

}
