<?php

namespace Database\Factories;

use DateTime;
use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $boarding = fake()->dateTime();

        return [
            'company' => fake()->company(),
            'plane' => $this->getPlaneName(),
            'ticket_price' => fake()->numberBetween(1,1500),
            'boarding' => $boarding,
            'departure' => $this->getDeparture($boarding),
            'from' => $this->faker->country(),
            'to' => $this->faker->country(),
            'arrival' => $this->faker->dateTime(),
        ];
    }

    /**
     * Creates a custom plane name in the format of name-XXX
     * @return string
     */
    private function getPlaneName() {
        $firstName = fake()->firstName();

        $number = fake()->numberBetween(1,999);
        $number = str_pad($number, 3, '0', STR_PAD_LEFT);

        return $firstName.'-'.$number;
    }


    /**
     * Sets departure as 2 hours ahead of boarding time
     * @param DateTime $boarding
     *
     * @return DateTime
     */
    private function getDeparture($boarding) {
        $departure = clone $boarding;

        // Add 2 hours to the boarding time
        $departure->add(new DateInterval('PT2H'));

        // Return the resulting DateTime object
        return $departure;
    }
}
