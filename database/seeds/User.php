<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'soportecolombia@grupo-link.com',
            'password' => bcrypt('pc12345'),
            'dependencie_id' => 1
        ]);
    }
}
