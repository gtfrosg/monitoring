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
	   'teclado'  => $this->faker->randomElement(['Logitech', 'Corsair', 'Razer', 'Microsoft', 'HP', 'Dell']),
	   'mouse'    => $this->faker->randomElement(['Logitech', 'Razer', 'Microsoft', 'SteelSeries', 'HP', 'Dell']),
	   'monitor'  => $this->faker->randomElement(['Samsung', 'LG', 'Dell', 'AOC', 'Asus', 'BenQ'])
        ];
    }
}
