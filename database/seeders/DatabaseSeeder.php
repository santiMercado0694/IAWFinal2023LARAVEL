<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
Use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
