<?php

namespace Database\Factories;

use App\Models\Telefone;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelefoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telefone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'telefone' =>  preg_replace("/[^0-9]/", "",$this->faker->phoneNumber)
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Telefone $telefone) {
            //
        })->afterCreating(function (Telefone $telefone) {
            $telefone->user()->attach($telefone->id);
        });
    }
}
