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
            ['course_id' => '1', 'day' => 'Monday', 'class_start' => '7', 'class_end' => '9', 'room' => 'NB204', 'circle' => '12', 'year' => '1', 'form' => 'Project', 'teacher_id' => '1', 'created_at' => now(),],
            ['course_id' => '4', 'day' => 'Monday', 'class_start' => '10', 'class_end' => '12', 'room' => 'CH12', 'circle' => '22', 'year' => '2', 'form' => 'Seminar', 'teacher_id' => '2', 'created_at' => now(),],
            ['course_id' => '6', 'day' => 'Tuesday', 'class_start' => '9', 'class_end' => '11', 'room' => 'NB204', 'circle' => '13', 'year' => '1', 'form' => 'Laboratory exercise', 'teacher_id' => '3', 'created_at' => now(),],
            ['course_id' => '3', 'day' => 'Thursday', 'class_start' => '7', 'class_end' => '9', 'room' => 'NB204', 'circle' => '36', 'year' => '3', 'form' => 'Exercise', 'teacher_id' => '4', 'created_at' => now(),],
            ['course_id' => '7', 'day' => 'Friday', 'class_start' => '7', 'class_end' => '9', 'room' => 'CH14', 'circle' => '54', 'year' => '5', 'form' => 'Lecture', 'teacher_id' => '5', 'created_at' => now(),],
            ['course_id' => '2', 'day' => 'Wednesday', 'class_start' => '7', 'class_end' => '9', 'room' => 'NB204', 'circle' => '43', 'year' => '4', 'form' => 'Lecture', 'teacher_id' => '6', 'created_at' => now(),],
            ['course_id' => '3', 'day' => 'Monday', 'class_start' => '13', 'class_end' => '15', 'room' => 'CH12', 'circle' => '28', 'year' => '2', 'form' => 'Seminar', 'teacher_id' => '7', 'created_at' => now(),],
            ['course_id' => '6', 'day' => 'Tuesday', 'class_start' => '10', 'class_end' => '11', 'room' => 'NB226', 'circle' => '13', 'year' => '1', 'form' => 'Laboratory exercise', 'teacher_id' => '8', 'created_at' => now(),],
            ['course_id' => '8', 'day' => 'Thursday', 'class_start' => '16', 'class_end' => '18', 'room' => 'NB204', 'circle' => '36', 'year' => '3', 'form' => 'Exercise', 'teacher_id' => '9', 'created_at' => now(),],
            ['course_id' => '9', 'day' => 'Friday', 'class_start' => '12', 'class_end' => '15', 'room' => 'CH14', 'circle' => '40', 'year' => '4', 'form' => 'Lecture', 'teacher_id' => '10', 'created_at' => now(),],
            ['course_id' => '10', 'day' => 'Wednesday', 'class_start' => '18', 'class_end' => '19', 'room' => 'NB204', 'circle' => '22', 'year' => '2', 'form' => 'Lecture', 'teacher_id' => '1', 'created_at' => now(),],
            ['course_id' => '11', 'day' => 'Thursday', 'class_start' => '13', 'class_end' => '15', 'room' => 'CH12', 'circle' => '52', 'year' => '5', 'form' => 'Seminar', 'teacher_id' => '2', 'created_at' => now(),],
            ['course_id' => '12', 'day' => 'Wednesday', 'class_start' => '8', 'class_end' => '11', 'room' => 'CH12', 'circle' => '13', 'year' => '1', 'form' => 'Seminar', 'teacher_id' => '3', 'created_at' => now(),],
            ['course_id' => '13', 'day' => 'Thursday', 'class_start' => '7', 'class_end' => '10', 'room' => 'NB601', 'circle' => '56', 'year' => '5', 'form' => 'Exercise', 'teacher_id' => '4', 'created_at' => now(),],
            ['course_id' => '14', 'day' => 'Friday', 'class_start' => '11', 'class_end' => '13', 'room' => 'CH16', 'circle' => '12', 'year' => '1', 'form' => 'Lecture', 'teacher_id' => '5', 'created_at' => now(),],
            ['course_id' => '12', 'day' => 'Friday', 'class_start' => '8', 'class_end' => '9', 'room' => 'NB228', 'circle' => '43', 'year' => '4', 'form' => 'Laboratory exercise', 'teacher_id' => '6', 'created_at' => now(),],
            ['course_id' => '10', 'day' => 'Tuesday', 'class_start' => '13', 'class_end' => '14', 'room' => 'CH12', 'circle' => '32', 'year' => '3', 'form' => 'Seminar', 'teacher_id' => '7', 'created_at' => now(),],
            ['course_id' => '14', 'day' => 'Tuesday', 'class_start' => '8', 'class_end' => '11', 'room' => 'CH16', 'circle' => '10', 'year' => '1', 'form' => 'Seminar', 'teacher_id' => '8', 'created_at' => now(),],
            ['course_id' => '11', 'day' => 'Wednesday', 'class_start' => '7', 'class_end' => '8', 'room' => 'NB634', 'circle' => '36', 'year' => '3', 'form' => 'Laboratory exercise', 'teacher_id' => '9', 'created_at' => now(),],
            ['course_id' => '13', 'day' => 'Friday', 'class_start' => '10', 'class_end' => '11', 'room' => 'CH14', 'circle' => '32', 'year' => '4', 'form' => 'Lecture', 'teacher_id' => '10', 'created_at' => now(),],
        ]);
    }
}
