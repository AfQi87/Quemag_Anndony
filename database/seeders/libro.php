<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro=[
            //[
              //  'NombreComoEstaEnLaTabla'=>'ValorQueQuieroAsignar'
            // ],
            [   'id'=>'1',
                'ISBN'=>'001',
                'titulo'=>'Harry Potter',
                'precio'=>'23000',
                'stock'=>'15',
                'editorial_fk'=>'1',
            ],
            [   'id'=>'2',
                'ISBN'=>'002',
                'titulo'=>'Cien Años de Soledad',
                'precio'=>'20000',
                'stock'=>'30',
                'editorial_fk'=>'2',
            ],
            [   'id'=>'3',
                'ISBN'=>'003',
                'titulo'=>'Fisica Para Ingenieria',
                'precio'=>'34000',
                'stock'=>'5',
                'editorial_fk'=>'3',
            ],
            [   'id'=>'4',
                'ISBN'=>'004',
                'titulo'=>'El Nuevo Testamento',
                'precio'=>'15000',
                'stock'=>'10',
                'editorial_fk'=>'4',
            ],
            [   'id'=>'5',
                'ISBN'=>'005',
                'titulo'=>'Programacion Avanzada',
                'precio'=>'45000',
                'stock'=>'25',
                'editorial_fk'=>'5',    
            ],
            
           
        ];
        DB::table('libro')->insert($libro);
    }
}
