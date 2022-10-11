<?php

namespace Database\Factories;

use App\Models\Eletrodomesticos;
use Illuminate\Database\Eloquent\Factories\Factory;

class EletrodomesticoFactory extends Factory
{

    protected $model = Eletrodomesticos::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'nome' => $this->faker->nome(),
            'descricao' => $this->faker->descricao(),
            'tensao' => $this->faker->tensao(),
            'marca' => $this->faker->marca()
        ];
    }
}
