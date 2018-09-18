<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'Recepción'
        ]);
        DB::table('roles')->insert([
            'name' => 'Operador'
        ]);
        DB::table('roles')->insert([
            'name' => 'Archivo'
        ]);
        DB::table('roles')->insert([
            'name' => 'Revisor'
        ]);
    }
}
