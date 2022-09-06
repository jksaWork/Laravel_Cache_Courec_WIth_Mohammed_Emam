<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'jksa altigna osan',
            'subscrption_end_dat' =>date('y-m-d'),
            'active' => [0 , 1][random_int(0, 1)],
            'email' => 'jksa@altigani.jksa',
        ];
    }
}
