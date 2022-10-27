<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Red Levl',
                'username' => 'owner',
                'email' => 'owner@email.com',
                'password' => Hash::make('owner123'),
                'role' => 'Owner',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
