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
    }
}
