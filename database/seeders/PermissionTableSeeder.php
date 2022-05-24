<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'ajouter un client'],
            ['name' => 'consulter un client'],
            ['name' => 'editer un client'],

            ['name' => 'ajouter un client'],
            ['name' => 'consulter un client'],
            ['name' => 'editer un client'],

            ['name' => 'ajouter un client'],
            ['name' => 'consulter un client'],
            ['name' => 'editer un client']
        ]);
    }
}
