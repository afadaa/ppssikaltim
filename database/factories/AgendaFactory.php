<?php

namespace Database\Factories;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agenda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thumbnail' => $this->faker->word,
        'tittle' => $this->faker->word,
        'desc' => $this->faker->word,
        'location' => $this->faker->text,
        'quota' => $this->faker->randomDigitNotNull,
        'gift' => $this->faker->word,
        'date_start' => $this->faker->date('Y-m-d H:i:s'),
        'date_end' => $this->faker->date('Y-m-d H:i:s'),
        'link' => $this->faker->text,
        'slug' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
