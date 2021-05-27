<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'month' => 3,
            'percent' => 10
        ]);

        Plan::create([
            'month' => 4,
            'percent' => 11
        ]);

        Plan::create([
            'month' => 5,
            'percent' => 12
        ]);

        Plan::create([
            'month' => 6,
            'percent' => 13
        ]);

        Plan::create([
            'month' => 7,
            'percent' => 14
        ]);

        Plan::create([
            'month' => 8,
            'percent' => 15
        ]);

        Plan::create([
            'month' => 9,
            'percent' => 16
        ]);

        Plan::create([
            'month' => 10,
            'percent' => 17
        ]);

        Plan::create([
            'month' => 11,
            'percent' => 18
        ]);

        Plan::create([
            'month' => 12,
            'percent' => 19
        ]);
    }
}
