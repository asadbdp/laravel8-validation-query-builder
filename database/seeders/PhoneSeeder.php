<?php

namespace Database\Seeders;

use App\Models\phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        phone::insert([
            [
                'student_id' => 1,
                'phone' => 1728881245

            ],

            [
                'student_id' => 2,
                'phone' => 1937809203

            ],

            [
                'student_id' => 3,
                'phone' => 1515288611

            ],


        ]);
    }
}
