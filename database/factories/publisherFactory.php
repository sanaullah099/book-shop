<?php

namespace Database\Factories;

use App\Models\publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class publisherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = publisher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'image'=> $this->faker->sentence,
            'contact' => $this->faker->phoneNumber, 
        ];
    }
}
