<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\TrabajadorPortuario::class, function(Faker\Generator $faker) {
	$clases = [
		'Clase A',
		'Clase B',
		'Clase C',
		'Clase D',
		'Clase E',
		'Clase F',
		'Clase G',
		'Clase I'
	];
	return [
		'ApellidoPaterno'	=>	$faker->lastName,
		'ApellidoMaterno'	=>	$faker->lastName,
		'Nombre'			=>	$faker->firstName,
		'Tax'				=>	$faker->randomNumber(4),
		'ClaseBrevete'		=>  $faker->randomElement($clases),
		'EstadoCivil'		=>	$faker->randomElement(['Soltero','Casado','Divorciado']),
		'FechaNacimiento'	=>	$faker->date(),
		'FechaRevalidacionBrevete'	=>	$faker->date(),
		'NroCelular'		=> $faker->randomNumber(7),
		'TipoDocIdentidad'	=> $faker->randomNumber(1),
		'NroDocIdentidad'	=> $faker->randomNumber(6),
		'NroLicenciaBrevete'=> $faker->randomNumber(6),
		'TelefonoAdicional1'=> $faker->randomNumber(6),
		'TelefonoAdicional2'=> $faker->randomNumber(6),
		'Sexo'				=> $faker->randomElement(['Femenido','Masculino']),
		'TipoRegimenPensionar'=> $faker->randomNumber(3),
		'IndicadorTieneBrevete'=> $faker->randomElement([0,1]),
		'Activo'			=> 1,
		'UsuarioCreacion'	=> 1,
		'UsuarioActualizacion' => 1,
		'FechaCreacion'		=> date('Y-m-d H:m:s'),
		'FechaActualizacion'=> date('Y-m-d H:m:s')
	];
});