<?php


namespace Modules\Catalog\Data\Repositories;


use Modules\Catalog\Entities\Brand;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class BrandRepository
 * @package Modules\Catalog\Data\Repositories
 */
class BrandRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Brand::class;
    }
}
