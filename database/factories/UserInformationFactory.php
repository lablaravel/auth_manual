<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInformation>
 *
 */
class UserInformationFactory extends Factory
{

    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),            
            'cpf' => fake()->randomElement(['69024351898','79024351898','89024351898']),
            'cellphone' => fake()->randomElement(["82791401170","82562393671","82602348402"]),            
        ];
    }
}