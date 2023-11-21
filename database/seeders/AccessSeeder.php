<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $access_limit = "10/11/2023";
        $encodedAccessLimit = base64_encode($access_limit);
        DB::table('accesses')->insert([
            'password' => Hash::make('systemadmin@2023'),
            'access_limit' => $encodedAccessLimit,
        ]);
    }
}
