<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operation;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //Operation::factory()->count(50)->create();
        Operation::insert([
            ['course_id' => '1', 'day' => 'Monday', 'class_start' => '7', 'class_end' => '9', 'room' => 'NB204', 'circle' => '42', 'year' => '4', 'form' => 'Lecture', 'teacher_id' => '1', 'created_at' => now(),],
            ['course_id' => '1', 'day' => 'Monday', 'class_start' => '13', 'class_end' => '15', 'room' => 'CH12', 'circle' => '42', 'year' => '4', 'form' => 'Seminar', 'teacher_id' => '1', 'created_at' => now(),],
            ['course_id' => '6', 'day' => 'Tuesday', 'class_start' => '9', 'class_end' => '11', 'room' => 'NB204', 'circle' => '13', 'year' => '1', 'form' => 'Seminar', 'teacher_id' => '5', 'created_at' => now(),],
            ['course_id' => '3', 'day' => 'Thursday', 'class_start' => '7', 'class_end' => '9', 'room' => 'NB204', 'circle' => '36', 'year' => '3', 'form' => 'Exercise', 'teacher_id' => '3', 'created_at' => now(),],
            ['course_id' => '7', 'day' => 'Friday', 'class_start' => '7', 'class_end' => '9', 'room' => 'CH14', 'circle' => '42', 'year' => '4', 'form' => 'Lecture', 'teacher_id' => '3', 'created_at' => now(),],
        ]);
    }
}
