<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Admin',
            'mname' => '', // Middle name can be empty
            'lname' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'), // Hash the password
            'role' => 'administrator',
            'gender' => '', // Gender can be empty
        ]);
    }
}
