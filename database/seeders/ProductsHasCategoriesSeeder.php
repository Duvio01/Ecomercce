<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductHasCategory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsHasCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ProductHasCategory::factory(50)->create();

        $faker = Faker::create();
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 5,
            'product_id' => 51
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 5,
            'product_id' => 52
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 5,
            'product_id' => 53
        ]);


        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 54
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 55
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 56
        ]);


        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 3,
            'product_id' => 57
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 3,
            'product_id' => 58
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 3,
            'product_id' => 59
        ]);
    }
}
