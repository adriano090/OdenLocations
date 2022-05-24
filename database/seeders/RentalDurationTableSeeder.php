<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RentalDurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rental_durations')->insert([
            ['wording' => 'Journée', 'valueInHour' => 24],
            ['wording' => 'Demi-journée', 'valueInHour' => 12]
        ]);
    }
}
