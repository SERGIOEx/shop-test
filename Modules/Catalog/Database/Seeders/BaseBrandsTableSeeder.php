<?php

namespace Modules\Catalog\Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Modules\Catalog\Data\Services\BrandService;
use Prettus\Validator\Exceptions\ValidatorException;

class BaseBrandsTableSeeder extends Seeder
{
    private $service;

    public function __construct(BrandService $service)
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
            $this->service->createBrand($faker->company);
        }
    }
}
