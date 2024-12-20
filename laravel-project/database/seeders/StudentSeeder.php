<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i < 50; $i++)
        {
            $department = DB::table('departments')->inRandomOrder()->first();
            $lecturer = DB::table('lecturers')->inRandomOrder()->first();

            $reg = rand(1,150);

            $year = rand(2018,2024);

            DB::table('students')->insert([
                'npm' => $department->code.''.substr($year,-2).''.sprintf('%03d', $reg),
                'fullname' => $faker->name,
                'year_entry' => $year,
                'group' => $faker->randomElement(['A', 'B', 'C', 'D', 'NR']),
                'nidn' => $lecturer->nidn,
                'department_id' => $lecturer->department_id
            ]);
        }
    }
}
