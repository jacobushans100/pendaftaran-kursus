<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin11',
            'password' => Hash::make('1234'),
            'role_id' => 1,
            'status' => 0
        ]);
        User::create([
            'name' => 'Bambang',
            'username' => 'bambang12',
            'password' => Hash::make('1234'),
            'npm' => '13399955',
            'kelas' => '4KA22',
            'role_id' => 0,
            'status' => 0
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
