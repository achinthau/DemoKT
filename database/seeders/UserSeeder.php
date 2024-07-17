<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * php artisan db:seed --class=UserSeeder
     */
    public function run(): void
    {
        User::query()->truncate();

        User::create([
            'name'=>'Ashwin Corera',
            'email'=>'macorera@gmail.com',
            'password'=>Hash::make('dev@1234'),
        ]);
    }
}
