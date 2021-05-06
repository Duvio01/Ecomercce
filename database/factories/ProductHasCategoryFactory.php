<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductHasCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductHasCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductHasCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'category_id' => $this->faker->numberBetween(1,Category::count()),
            'product_id' => $this->faker->numberBetween(1, Product::count())
        ];
    }
}
