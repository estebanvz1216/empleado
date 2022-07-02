<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class empleado_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleado')->insert([
            'nombre'=>'josesito',
            'apellidos'=>'ramirez',
            'telefono'=>'321423332',
            'correo'=>'@hotmail.com',
        ]);
    }
}
