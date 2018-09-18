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
            'lastname' => 'general',
            'document' => 111111,
            'email' => 'sistemas@consultecnicos.com',
            'password' => bcrypt('Agdps1st3m4s'),
            'dependencie_id' => 1
        ]);
        DB::table('user_has_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 1
        ]);
        DB::table('user_has_roles')->insert([
            'role_id' => 1,
            'user_id' => 1
        ]);
    }
}
