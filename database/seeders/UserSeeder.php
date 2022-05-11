<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => Str::random(10),
            'first_name' => Str::random(5),
            'last_name' => Str::random(5),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Str::random(10),
            'isAdmin' => 1,
            'isActive' => 0,
        ]);

        User::factory()->count(10)->create();
    }
}
