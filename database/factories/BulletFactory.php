<?php

namespace Database\Factories;

use App\Models\Bullet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BulletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bullet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'type' => 'task',
            'name' => $this->faker->sentence(7, true),
            'state' => $this->faker->randomElement([
                'incomplete',
                'complete',
                // 'migrated',
                'note',
                // 'scheduled',
            ]),
            'created_at' => $this->faker->dateTimeBetween(now()->subDays(10)),
        ];
    }
}
