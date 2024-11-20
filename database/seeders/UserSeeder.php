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
     */
    public function run(): void
    {
        if (!User::where('email', 'cabral@email.com')->first()) {
            $superAdmin = User::create([
                'name' => 'Cabral',
                'email' => 'cabral@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12])
            ]);
        }

        if (!User::where('email', 'kelly@email.com')->first()) {
            $admin = User::create([
                'name' => 'Kelly',
                'email' => 'kelly@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12])
            ]);
        }

        if (!User::where('email', 'jessica@email.com')->first()) {
            $teacher = User::create([
                'name' => 'Jessica',
                'email' => 'jessica@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12])
            ]);
        }

        if (!User::where('email', 'gabrielly@email.com')->first()) {
            $tutor = User::create([
                'name' => 'Gabrielly',
                'email' => 'gabrielly@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12])
            ]);
        }

        if (!User::where('email', 'marcos@email.com')->first()) {
            $student = User::create([
                'name' => 'Marcos',
                'email' => 'marcos@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12])
            ]);
        }
    }
}
