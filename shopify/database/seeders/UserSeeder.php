<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::upsert([
            ['name' => $name =  fake()->firstName(), 'email' => "$name @gmail.com", 'address' => 'private location'],
            ['name' => $name =  fake()->firstName(), 'email' => "$name @gmail.com", 'address' => 'private location'],
        ], ['name', 'email', 'address']);
    }
}
