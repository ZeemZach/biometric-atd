<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Information Technology',
        ]);
        Course::create([
            'name' => 'Computer Engineering',
        ]);
        Course::create([
            'name' => 'Electrical Engineering',
        ]);
        Course::create([
            'name' => 'Civil Engineering',
        ]);
        Course::create([
            'name' => 'Mechanical Engineering',
        ]);
    }
}
