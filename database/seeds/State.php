<?php

use Illuminate\Database\Seeder;

class State extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => "Ingresado"
        ]);
        DB::table('states')->insert([
            'name' => "Documentos Cargados"
        ]);
    }
}
