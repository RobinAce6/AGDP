<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Parameter::class);
        $this->call(Dependency::class);
        $this->call(User::class);
        $this->call(Department::class);
        $this->call(Citie::class);
        $this->call(State::class);
    }
}
