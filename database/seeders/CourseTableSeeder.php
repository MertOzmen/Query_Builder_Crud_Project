<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('course')->insert(
            [
                [
                    'course_title'=>'Php',
                    'course_content'=>'Php Kurs İçeriği',
                    'course_must'=>1
                ],
                [
                    'course_title'=>'Bootsrap',
                    'course_content'=>'Bootsrap Kurs İçeriği',
                    'course_must'=>2
                ],
                [
                    'course_title'=>'JS',
                    'course_content'=>'JS Kurs İçeriği',
                    'course_must'=>3
                ],
                [
                    'course_title'=>'Laravel',
                    'course_content'=>'Laravel Kurs İçeriği',
                    'course_must'=>4
                ]
            ]
        );
    }
}
