<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
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
        \App\Models\User::factory(5)->Create();

        $user = \App\Models\User::factory()->Create([
            'name' => 'admin ALHUTAMA',
            'email' => 'bakwan@bamma.com',
            'password' => Hash::make('12345678'),
            'phone' => '0895800975009',
            'role' => 'ADMIN',


        ]);
    }
}
