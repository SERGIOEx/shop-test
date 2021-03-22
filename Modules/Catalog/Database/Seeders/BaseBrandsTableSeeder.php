<?php

namespace Modules\Catalog\Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Modules\Catalog\Entities\Brand;

class BaseBrandsTableSeeder extends Seeder
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
            $data[] = [
                'name' => $faker->company,
            ];
        }

        Brand::insert($data);
    }
}
