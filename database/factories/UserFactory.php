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
        return [
            
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'year' => $this->faker->numberBetween(1,5),
            'phone_number' =>$this->faker->phoneNumber(),
            'telegram_user_id' =>$this->faker->numberBetween(100000,10000000),
            'telegram_user_name' =>$this->faker->name,
            'remember_token' => Str::random(10),
        ];
    }
}
