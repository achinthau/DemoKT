<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * php artisan db:seed --class=SkillSeeder
     */
    public function run(): void
    {
        Skill::query()->truncate();
        Skill::create(
            ['title' => 'English']
        );
        Skill::create(
            ['title' => 'Sinhala']
        );
        Skill::create(
            ['title' => 'Tamil']
        );
    }
}
