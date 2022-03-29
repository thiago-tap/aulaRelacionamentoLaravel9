<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name"=> "Thiago",
            "email"=> "thiago@tenil.com.br",
            "password"=> Hash::make("123456")
        ]);

        DB::table('address')->insert([
            "address" => "DF Plaza"
        ]);
    }
}
