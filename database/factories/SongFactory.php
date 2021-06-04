<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitalNotNull(),
            'title' => $this->faker->sentences(5),
            'artist_group' => $this->faker->sentences(10),
            'release_date' => $this->faker->Date(),
            'track' => $this->randomDigitNotNull(),
            'cover' => 'img/' . $this->faker->image('public/img', 50, 50, null, false),
        ];
    }
}
