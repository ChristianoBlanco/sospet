<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\anuncio;

class AnuncioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = anuncio::class;

     public function definition()
    {

        return [
            'dado_id'=> rand(1, 5),
            'nome'=>$this->faker->name(),
            'tipo'=>$this->faker->name(),
            'pet'=>$this->faker->name(),
            'descricao'=>$this->faker->text(100),
            'foto1'=>$this->faker->name(),
            'foto2'=>$this->faker->name(),
            'foto3'=>$this->faker->name(),
            'foto4'=>$this->faker->name(),
            'dt_anuncio'=>$this->faker->dateTime($max = 'now', $timezone = null)->format('Y-m-d H:i:s')

        ];
        return $model;
    }
}
