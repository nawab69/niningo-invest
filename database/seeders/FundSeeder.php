<?php

namespace Database\Seeders;

use App\Models\Fund;
use Illuminate\Database\Seeder;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fund::create([
            'user_id' => 1,
        ]);

        Fund::create([
            'user_id' => 2,
        ]);
    }
}
