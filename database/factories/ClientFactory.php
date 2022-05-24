<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $city = $this->faker->city;
        $country = $this->faker->country;

        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'sexe' => array_rand(['F','H'], 1),
            'dateOfBirth' => $this->faker->dateTimeBetween('1980-01-01', '2001-12-30'),
            'placeOfBirth' => '$country, $city',
            'nationality' => $this->faker->country,
            'country' => $country,
            'city' => $city,
            'address' => $this->faker->address,
            'phone1' => $this->faker->phoneNumber,
            'phone2' => $this->faker->phoneNumber,
            'identityDocument' => array_rand(['CNI', 'PASSPORT', 'PERMIS DE CONDUIRE'], 1),
            'numberIdentityDocument' => $this->faker->creditCardNumber
        ];
    }
}
