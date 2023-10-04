<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'aflah1@gmail.com',
            'password'=>bcrypt('rahasia'),
        ]);
        User::create([
            'name'=>'staff',
            'email'=>'aflahbadrus1@gmail.com',
            'password'=>bcrypt('aflahbadrus1'),
        ]);
    }
}
