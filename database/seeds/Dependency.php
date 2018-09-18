<?php

use Illuminate\Database\Seeder;

class Dependency extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependencies')->insert([
            'name' => 'Recepcion'
        ]);
        DB::table('dependencies')->insert([
            'name' => 'Operacion'
        ]);
        DB::table('dependencies')->insert([
            'name' => 'Archivo'
        ]);
    }
}
