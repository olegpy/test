<?php

namespace Tests\_support\Helper;

use App\User;
use Codeception\Test\Feature\Stub;
use Faker\Factory;

class Generator
{

    use Stub;

    /** @var \Faker\Generator */
    private $faker;


    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function getRandomUser(array $fields)
    {

        $randomizedFields = [
            'id' => $this->faker->numberBetween(0,100000),
            'name' => $this->faker->name,
            'password' => $this->faker->password,
            'email' => $this->faker->email
        ];

        /** @var User $user */
        try {
            return $this->make('App\Models\User', array_merge($randomizedFields, $fields));
        } catch (\Exception $e) {
            return null;
        }
    }
}