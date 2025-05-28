<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'John Doe',
                'student_id_number' => 'S123456',
                'email' => 'john@gmail.com',
                'phone_number' => '1234567890',
                'birth_date' => '2000-01-01',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [   
                'name' => 'Mahreczy Aditya',
                'student_id_number' => 'S123407',
                'email' => 'mahrezyaditya@gmail.com',
                'phone_number' => '1234560188',
                'birth_date' => '2005-03-31',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 2,
            ],
        ]);
    }
}
