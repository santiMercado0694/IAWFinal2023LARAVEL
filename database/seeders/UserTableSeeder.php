<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Data = [
            [
             'name' => 'Santiago' ,
             'email' => 'santimercado06.94@gmail.com' ,
             'email_verified_at' => null ,
             'password' => bcrypt('12341234') ,
            ],
            [ 
             'name' => 'Juan' ,
             'email' => 'Juancito0305@gmail.com' ,
             'email_verified_at' => null ,
             'password' => bcrypt('12341234') ,
            ],
            [
             'name' => 'Raul' ,
             'email' => 'raulguarnizo@gmail.com' ,
             'email_verified_at' => null ,
             'password' => bcrypt('12341234') ,
            ],
         ];
         DB::table('users')->insert($Data);
    }
}