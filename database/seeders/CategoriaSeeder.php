<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([ 
            'nombre' => 'Sin categoria'          
        ]);

        Categoria::create([ 
            'nombre' => 'Computadora'          
        ]);

        Categoria::create([ 
            'nombre' => 'Celular'          
        ]);

        Categoria::create([ 
            'nombre' => 'Auriculares'          
        ]);

        Categoria::create([ 
            'nombre' => 'Camara'          
        ]);

        Categoria::create([ 
            'nombre' => 'Televisor'          
        ]);

        Categoria::create([ 
            'nombre' => 'Consola'          
        ]);
    }
}
