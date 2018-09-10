<?php

use Illuminate\Database\Seeder;

class Citie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Bogota',
            'department_id' => 1
        ]);
    }
}
