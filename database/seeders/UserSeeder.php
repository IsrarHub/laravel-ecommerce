<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        //
        for($i=1; $i<=10; $i++){
        DB::table('user')->insert([
            'name' => Str::random(10),
            'email' => Str::random(8).'@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
    }
}
