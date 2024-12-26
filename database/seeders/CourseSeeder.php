<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $courses = [
            [
                'course_name' => 'BSIT',
                'course_description' => 'BSIT Students'
            ],
            [
                'course_name' => 'BSCRIM',
                'course_description' => 'BSCRIM Students'
            ],
            [
                'course_name' => 'BSN',
                'course_description' => 'BSN Students'
            ],
            [
                'course_name' => 'BSCS',
                'course_description' => 'BSCS Students'
            ],
            [
                'course_name' => 'BSED',
                'course_description' => 'BSED Students'
            ],
            [
                'course_name' => 'BSHM',
                'course_description' => 'BSHM Students'
            ],
            [
                'course_name' => 'BSA',
                'course_description' => 'BSA Students'
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
