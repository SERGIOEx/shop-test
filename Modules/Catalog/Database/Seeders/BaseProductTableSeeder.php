<?php

namespace Modules\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Modules\Catalog\Entities\Brand;
use Modules\Catalog\Entities\Product;

class BaseProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(config('app.faker_locale'));

        for ($i = 0; $i < 10; $i++) {
            $brand = Brand::inRandomOrder()->first();

            $data[] = [
                'brand_id' => $brand->id,
                'name'     => $faker->colorName,
                'price'    => random_int(100, 999),
                'created_at' => now()
            ];
        }

        Product::insert($data);
    }
}
