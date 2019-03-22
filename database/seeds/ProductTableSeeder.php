<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $categoryId = DB::table('category')->pluck('id')->toArray();

        for ($i = 0; $i <= 5; $i++) {
            factory(App\Models\Product::class, 5)->create([
                'category_id' => $faker->randomElement($categoryId),
            ]);
        }
    }
}
