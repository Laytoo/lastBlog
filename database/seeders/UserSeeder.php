<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'), // password
                'role'=>'admin',
                'status'=>'active',

            ],[
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'), // password
                'role'=>'user',
                'status'=>'active',
            ],
        ]);

        User::factory(3)->create();
    }
}
