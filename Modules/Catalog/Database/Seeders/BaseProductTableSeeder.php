<?php

namespace Modules\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Modules\Catalog\Data\Parameters\ProductParameters;
use Modules\Catalog\Data\Services\ProductService;
use Modules\Catalog\Entities\Brand;
use Prettus\Validator\Exceptions\ValidatorException;

class BaseProductTableSeeder extends Seeder
{
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws ValidatorException
     */
    public function run()
    {
        $faker = Faker::create(config('app.faker_locale'));

        for ($i = 0; $i < 10; $i++) {
            $brand = Brand::inRandomOrder()->first();

            $params = new ProductParameters([
                'brand_id' => $brand->id,
                'name'     => $faker->colorName,
                'price'     => random_int(100, 999),
                'created_at' => now()
            ]);

            $this->service->createProduct($params);
        }
    }
}
