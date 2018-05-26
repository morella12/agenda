<?php

use Faker\Generator as Faker;

$factory->define(App\Contato::class, function (Faker $faker) {
    return [
        'foto' => '',
        'nome' => $faker->unique()->name,
        'telefone' => $faker->unique()->cellphoneNumber,
        'email'  => $faker->safeEmail,
        'dataNascimento'=> $faker->date('Y-m-d')
    ];
});
