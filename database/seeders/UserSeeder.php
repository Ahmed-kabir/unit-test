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
        for ($i = 0; $i < 100; $i++) {
          $user[] =  [
            'name' => 'Dummy' . $i,
            'email' => 'test@gmail.com' . $i,
            'password' => Hash::make("testcase")
            ];
        }

        User::insert($user);
    }
}
