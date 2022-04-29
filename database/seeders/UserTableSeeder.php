<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        
       /* $jefe = Role::create(['name' => 'Jefe']);
        $empleado = Role::create(['name' => 'Empleado']);
        $cliente = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'products'])->syncRoles([$jefe, $empleado]);
        Permission::create(['name' => 'products.index'])->syncRoles([$jefe, $empleado]);
        Permission::create(['name' => 'products.create'])->syncRoles([$jefe, $empleado]);
        Permission::create(['name' => 'products.edit'])->syncRoles([$jefe, $empleado]);
        Permission::create(['name' => 'products.show'])->syncRoles([$jefe, $empleado]);*/

         User::create([
             'name' => 'Santiago' ,
             'email' => 'santimercado06.94@gmail.com' ,
             'email_verified_at' => null ,
             'password' => bcrypt('12341234')
         ]);//->assignRole('Jefe');

        User::create([
            'name' => 'Juan' ,
            'email' => 'Juancito0305@gmail.com' ,
            'email_verified_at' => null ,
            'password' => bcrypt('12341234')
        ]);//->assignRole('Empleado');

         User::create([
            'name' => 'Raul' ,
            'email' => 'raulguarnizo@gmail.com' ,
            'email_verified_at' => null ,
            'password' => bcrypt('12341234')
         ]);//->assignRole('Empleado');

    }
}