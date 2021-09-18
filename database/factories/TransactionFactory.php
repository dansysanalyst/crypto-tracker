<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Team;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'amount' => rand(1, 1000),
            'asset_id' => Asset::factory(),
            'team_id' => Team::factory()
        ];
    }
}
