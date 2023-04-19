<?php

namespace Database\Factories\Form;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FormModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "emp_name"=>$this->faker->name(),
            "emp_image"=>$this->faker->image('public/images/form', 400,300,'employee.png',true),
            "emp_email"=>$this->faker->unique()->safeEmail(),
            "emp_designation"=>$this->faker->designation(),
            "emp_phone"=>$this->faker->numerify('###-###-####'),
            "emp_status"=>rand(1,3),
        ];
    }
}
