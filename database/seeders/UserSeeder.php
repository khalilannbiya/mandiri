<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "Admin",
                'email' => "admin@percetakanmandiri.com",
                'roles' => 'ADMIN',
                'password' => Hash::make('adminmandiri123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Syeich Khalil Annbiya",
                'email' => "syeichkhalil@gmail.com",
                'roles' => 'ADMIN',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
