<?php

namespace Modules\Catalog\Tests\Unit;

use Modules\Catalog\Data\Services\BrandService;
use Tests\TestCase;

class EloquentBrandRepositoryTest extends TestCase
{
    /**
     * @var BrandService::class
     */
    protected $brandService;

    public function setUp(): void
    {
        parent::setUp();
        $this->brandService = app()->make(BrandService::class);
    }

    /**
     * Create Brand
     */
    public function testCreateProduct()
    {
        $item = $this->brandService->createBrand('Brand');
        $this->assertEquals('Brand', $item->name);
    }
}
