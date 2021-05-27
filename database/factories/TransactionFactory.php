<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
     * @throws \Exception
     */
    public function definition()
    {

        $type = ['deposit','withdraw','invest','replenished','send','receive'];
        return [
            'user_id' =>  $this->faker->numberBetween(0,2),
            'type' => $type[random_int(0, (count($type)-1))],
            'trx_id' => $this->faker->uuid,
            'amount' => $this->faker->numberBetween(100,600),
            'status' => 'completed'
        ];
    }
}
