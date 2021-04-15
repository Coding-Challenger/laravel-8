<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'endereco' => $this->faker->streetAddress,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,
            'cep' => $this->faker->postcode,
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Endereco $endereco) {
            //
        })->afterCreating(function (Endereco $endereco) {
            $endereco->user()->attach($endereco->id);
        });
    }
}
