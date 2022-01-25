<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     *  Что бы вызвать множество сидаров записываем их сюда
     *
     * @return void
     */
    public function run()
    {
        $this->call
        ([
            AdminSeeder::class,
            LabelsSeeder::class,
            StatusesSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
