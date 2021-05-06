<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        return [
            'name' => 'Product' . $this->faker->unique()->numberBetween(1,50),
            'description' => $this->faker->text($maxNBChars = 100),
            'price' => $this->faker->numberBetween(10000, 1000000),
            'available' =>$this->faker->boolean($changeOfGettingTrue = 50),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
    }
}
