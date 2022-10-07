<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->words($nb=4,$asText=true),
            // 'image' => $this->faker->text(10),
            'price' => $this->faker->numberBetween(10,500),
            // 'cetagory_id' => $this->faker->numberBetween(1,10)
           
        ];
    }
}
