<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Teacher::factory()->count(50)->create();

        Teacher::insert([
            ['firstname' => 'Ondrej', 'lastname' => 'Veľký', 'email' => 'o.velky@stuba.sk', 'phone_number' => '0936689378', 'created_at' => now(),],
            ['firstname' => 'Martin', 'lastname' => 'Malý', 'email' => 'm.maly@stuba.sk', 'phone_number' => '0936689332', 'created_at' => now(),],
            ['firstname' => 'Zuzana', 'lastname' => 'Chudá', 'email' => 'z.chuda@stuba.sk', 'phone_number' => '0936689326', 'created_at' => now(),],
            ['firstname' => 'Milada', 'lastname' => 'Ivanová', 'email' => 'm.ivanova@stuba.sk', 'phone_number' => '0936689342', 'created_at' => now(),],
            ['firstname' => 'Jozef', 'lastname' => 'Tur', 'email' => 'j.tur@stuba.sk', 'phone_number' => '0936689311', 'created_at' => now(),],
            ['firstname' => 'František', 'lastname' => 'Zápotocký', 'email' => 'f.zapotocky@stuba.sk', 'phone_number' => '0936689397', 'created_at' => now(),],
            ['firstname' => 'Malvína', 'lastname' => 'Prítomná', 'email' => 'm.pritomna@stuba.sk', 'phone_number' => '0936689345', 'created_at' => now(),],
            ['firstname' => 'Beata', 'lastname' => 'Červená', 'email' => 'b.cervena@stuba.sk', 'phone_number' => '0936689366', 'created_at' => now(),],
            ['firstname' => 'Štefan', 'lastname' => 'Vyskočil', 'email' => 's.vyskocil@stuba.sk', 'phone_number' => '0936689355', 'created_at' => now(),],
            ['firstname' => 'Radovan', 'lastname' => 'Múdry', 'email' => 'r.mudry@stuba.sk', 'phone_number' => '0936689339', 'created_at' => now(),],
        ]);
    }
}
