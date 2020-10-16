<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'User biasa 1',
                'email' => 'user1@biasa.com',
                'password' => Hash::make('user1'),
                'role' => 1
            ],
            [
                'name' => 'User biasa 2',
                'email' => 'user2@biasa.com',
                'password' => Hash::make('user2'),
                'role' => 1
            ],
            [
                'name' => 'Organizer',
                'email' => 'organizer@gmail.com',
                'password' => Hash::make('organizer'),
                'role' => 2
            ]
        ];
        User::insert($data);
    }
}
