<?php

namespace Database\Factories;

use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;

class bookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'title' => $this->faker->name,
        'author'=> $this->faker->name,
        'price' => $this->faker->numberBetween($min=500, $max=1000), 
        'quantitiy' => $this->faker->numberBetween($min=100, $max=130),
        'publisher_id' => $this->faker-> unique()->numberBetween($min=1, $max=30) ,
        'description' => $this->faker->sentence(),
        // 'email' => $this->faker->unique()->safeEmail(),
    
            
        ];
}
}