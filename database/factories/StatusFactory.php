<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'hostname' => $this->faker->domainName(),
	   'ip'       => $this->faker->ipv4(),
    	   'username' => $this->faker->userName(),
	   'login_at' => Carbon::now()->subDays(rand(0, 30)),
        ];
    }
}
