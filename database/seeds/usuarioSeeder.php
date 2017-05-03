<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new \App\User();
        $usuario->name = 'Administrador';
        $usuario->email = 'administrador@correo.web';
        $usuario->password = bcrypt('123456');
        $usuario->save();
    }
}
