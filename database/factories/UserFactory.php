<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'parent_id'=>$faker->numberBetween(1, 100),
    ];
});
$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker-> numberBetween(1, 100),
        'image_link' => $faker->imageUrl($width = 720, $height = 880),
        'image_list' => $faker->imageUrl($width = 720, $height = 880),
        'view' =>$faker->numberBetween(1, 100),
        'category_id' =>factory('App\Models\Category')->create()->id,
        'weight'=>$faker->numberBetween(0, 5),
        'description'=>$faker->sentence
    ];
});

