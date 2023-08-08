<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    public function run(): void
    {
        $user = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'images' => 'default/default.png',
                'created_at' => now('Asia/Jakarta'),
                'updated_at' => now('Asia/Jakarta'),
            ],
        ];

        DB::table('users')->insert($user);
    }
}
