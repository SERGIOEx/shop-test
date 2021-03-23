<?php

namespace Modules\Catalog\Tests\Unit;

use Modules\Catalog\Data\Parameters\ProductParameters;
use Modules\Catalog\Data\Services\ProductService;
use Tests\TestCase;

/**
 * Class EloquentProductRepositoryTest
 * @package Modules\Catalog\Tests\Unit
 */
class EloquentProductRepositoryTest extends TestCase
{
    /**
     * @var ProductService::class
     */
    protected $productService;

    public function setUp(): void
    {
        parent::setUp();
        $this->productService = app()->make(ProductService::class);
    }

    /**
     * Create Product
     */
    public function testCreateProduct()
    {
        $params = new ProductParameters([
            'brand_id'   => 1,
            'name'       => 'Product',
            'price'      => 911,
            'created_at' => now()
        ]);

        $item = $this->productService->createProduct($params);

        $this->assertEquals(1, $item->brand_id;
        $this->assertEquals('Product', $item->name);
        $this->assertEquals(911, $item->price);
        $this->assertNotNull($item->created_at);
    }

    /**
     * Get All Products
     *
     * @return void
     * @throws \Exception
     */
    public function testGetAllProducts()
    {
        for ($i = 1; $i <= 5; $i++) {
            $params = new ProductParameters([
                'brand_id'   => random_int(1, 10),
                'name'       => 'Product',
                'price'      => random_int(100, 999),
                'created_at' => now()
            ]);

            $this->productService->createProduct($params);
        }

        $items = $this->productService->getAll();

        $this->assertCount(5, $items);
    }

    // TODO: add testFindProductById
}
