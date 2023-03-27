<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AldinUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'aldinpramudya',
            'name'=>'Aldin Pramudya',
            'email'=>'aldinarielpramudya@gmail.com',
            'password'=>Hash::make('aldin2003')
        ]);
    }
}
