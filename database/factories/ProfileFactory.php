<?php

namespace Database\Factories;

use App\Models\Craft;
use App\Models\Locality;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'bio' => $this->faker->paragraph,
            'profile_pic' => $this->faker->imageUrl(640, 480, 'people'),
            'years_xp' => $this->faker->numberBetween(1, 20),
            'availability' => null,
            'craft_id' => Craft::inRandomOrder()->first()->id,
            'locality_id' => Locality::inRandomOrder()->first()->id,
            'phone' => $this->faker->randomElement(['99', '79', '77']) . $this->faker->numerify('######'),
            'facebook' => null,
        ];
    }
}
