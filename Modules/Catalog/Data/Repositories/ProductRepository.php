<?php


namespace Modules\Catalog\Data\Repositories;


use Modules\Catalog\Entities\Product;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ProductRepository
 * @package Modules\Catalog\Data\Repositories
 */
class ProductRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Product::class;
    }
}
