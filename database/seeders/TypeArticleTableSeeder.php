<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_articles')->insert([
            ['name' => 'Voiture'],
            ['name' => 'Immobilier'],
            ['name' => 'Appareils Electroniques'],
            ['name' => 'Salles']
        ]);
    }
}
