<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('roles')->insert([
            ['name' => 'Admin', 'description' => 'Administrator Role', 'level' => 1],
            ['name' => 'User', 'description' => 'Standard User Role', 'level' => 2],
            ['name' => 'Guest', 'description' => 'Guest Role', 'level' => 3],
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role_id' => 1,
        ]);
    }
}
