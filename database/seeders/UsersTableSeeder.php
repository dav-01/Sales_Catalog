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
            'name' => 'Cliente 2',
            'email' => 'cliente2@gmail.com',
            'password' => '$2a$12$MjJrmSi776xkVpq5kiSE..vJBlk8p655VWVx3I6HefaweOfm7aJe.',
        ]);

        // Cliente 1 - Clave 12345678
        User::create([
            'cedula' => '100554546',
            'name' => 'Cliente 2',
            'email' => 'cliente2@gmail.com',
            'password' => '$2a$12$MjJrmSi776xkVpq5kiSE..vJBlk8p655VWVx3I6HefaweOfm7aJe.',
        ]);

        // Cliente 2 - Clave 12345678
        User::create([
            'cedula' => '100554546',
            'name' => 'Cliente 2',
            'email' => 'cliente2@gmail.com',
            'password' => '$2a$12$MjJrmSi776xkVpq5kiSE..vJBlk8p655VWVx3I6HefaweOfm7aJe.',
        ]);

    }
}
