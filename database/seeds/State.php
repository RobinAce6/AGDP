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
        DB::table('states')->insert([
            'name' => "Asignado Tipo Respuesta"
        ]);
        DB::table('states')->insert([
            'name' => "Respondido"
        ]);
        DB::table('states')->insert([
            'name' => "Archivo"
        ]);
        DB::table('states')->insert([
            'name' => "Archivado"
        ]);
        DB::table('states')->insert([
            'name' => "Pendiente Mensajeria"
        ]);
        DB::table('states')->insert([
            'name' => "Envio Mensajeria"
        ]);
    }
}
