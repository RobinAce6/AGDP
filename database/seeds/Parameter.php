<?php

use Illuminate\Database\Seeder;

class Parameter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parameters')->insert([
            'name' => "dateModify",
            'valor' => "-1",
        ]);
        DB::table('parameters')->insert([
            'name' => "Enterprice",
            'valor' => "CTE",
        ]);
    }
}
