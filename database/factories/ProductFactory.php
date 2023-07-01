<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
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
            'name' => $this->faker->word,
            'detail' => $this->faker->sentence,
            'price' => $this->faker->randomNumber(2),
            'stock' => $this->faker->numberBetween(10, 100),
            'discount' => $this->faker->numberBetween(5, 30),
        ];
    }
}
