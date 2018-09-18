<?php

use Illuminate\Database\Seeder;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Admin'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Owner'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Select'
        ]);
    }
}
