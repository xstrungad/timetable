<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Subject::factory()->count(50)->create();

        Subject::insert([
            ['id_course' => 'N4214', 'name_course' => 'Anorganic Chemistry', 'abbreviations_course' => 'ACH', 'guarantor_course' => '1', 'created_at' => now(),],
            ['id_course' => 'N4862', 'name_course' => 'Mathematic I', 'abbreviations_course' => 'MATI', 'guarantor_course' => '5', 'created_at' => now(),],
            ['id_course' => 'N8542', 'name_course' => 'Mathematic II', 'abbreviations_course' => 'MATII', 'guarantor_course' => '5', 'created_at' => now(),],
            ['id_course' => 'N9963', 'name_course' => 'Organic Chemistry I', 'abbreviations_course' => 'OCHI', 'guarantor_course' => '3', 'created_at' => now(),],
            ['id_course' => 'N4546', 'name_course' => 'Organic Chemistry II', 'abbreviations_course' => 'OCHII', 'guarantor_course' => '3', 'created_at' => now(),],
            ['id_course' => 'N3362', 'name_course' => 'Material Balances', 'abbreviations_course' => 'MB', 'guarantor_course' => '8', 'created_at' => now(),],
            ['id_course' => 'N8465', 'name_course' => 'Physics I', 'abbreviations_course' => 'PI', 'guarantor_course' => '7', 'created_at' => now(),],
        ]);
    }
}
