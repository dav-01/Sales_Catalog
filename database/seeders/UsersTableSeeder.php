<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin - Clave 12345678
        User::create([
            'cedula' => '100554546',
            'name' => 'Osmeider Morales',
            'email' => 'osme@gmail.com',
            'password' => '$2a$12$MjJrmSi776xkVpq5kiSE..vJBlk8p655VWVx3I6HefaweOfm7aJe.',
        ]);

        // Cliente 1 - Clave 12345678
        User::create([
            'cedula' => '100554598',
            'name' => 'Jairo Rada',
            'email' => 'jairo@gmail.com',
            'password' => '$2a$12$MjJrmSi776xkVpq5kiSE..vJBlk8p655VWVx3I6HefaweOfm7aJe.',
        ]);

        // Cliente 2 - Clave 12345678
        User::create([
            'cedula' => '100554456',
            'name' => 'Arley Mejia',
            'email' => 'arley@gmail.com',
            'password' => '$2a$12$MjJrmSi776xkVpq5kiSE..vJBlk8p655VWVx3I6HefaweOfm7aJe.',
        ]);

    }
}
