<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mail;
use Illuminate\support\Str;

class MailFactory extends Factory
{
    /**
     * The name of the factory`s corresponding model
     *
     * @return string
     */
    protected $model = Mail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'receiver' => $this->faker->name(),
            'title' => $this->faker->unique()->safeEmail(),
            'content' => now(),
            'created_at' => now(),
        ];
    }
}
