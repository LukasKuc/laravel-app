<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName();
        $surname = $this->faker->lastName();

        return [
            'email' => strtolower($name.'.'.$surname).$this->faker->randomDigit().'@teltonika.lt',
            'name' => $name,
            'surname' => $surname,
            'views_count' => $this->faker->randomNumber(),
        ];
    }
}
