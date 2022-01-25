<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('labels')->insert([
            'name' => 'bob',
            'color' => 'blue',

        ]);
    }
}
