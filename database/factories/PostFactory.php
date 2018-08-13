<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $category_ids = \DB::table('Categories')->select('id')->get();
    $category_id = $faker->randomElement($category_ids)->id;
    
    return [
      'title'         => ucfirst($faker->name),
      'excerpt'       => $faker->sentence(6,true),
      'published_at'  => $faker->dateTime(),
      'body'          => $faker->text,
      'category_id'   => $category_id,
    ];
});
