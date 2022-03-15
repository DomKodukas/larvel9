<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'asmens_vardas' => $this->faker->name(),
            'el_pastas' => $this->faker->unique()->safeEmail(),
            'asmens_prierasas' =>$this->faker->sentence(),
        ];
    }
}
