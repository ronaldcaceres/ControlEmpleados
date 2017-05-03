<?php

use Illuminate\Database\Seeder;

class TrabajadorPortuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\TrabajadorPortuario',80)->create();
    }
}
