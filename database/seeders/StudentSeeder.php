<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //factory uses with seeder

        student::factory()->count(100)->create();

        ///only use seeder
        /*student::insert([
            [
                'name' => 'asad',
                'roll' => 520,
                'reg' => 202526,
                'session' => '2022-2023',
                'class' => 10

            ],

            [
                'name' => 'sabuj',
                'roll' => 521,
                'reg' => 202527,
                'session' => '2022-2023',
                'class' => 10

            ],

            [
                'name' => 'zaman',
                'roll' => 523,
                'reg' => 202528,
                'session' => '2022-2023',
                'class' => 10
            ],


        ]);*/
    }
}
