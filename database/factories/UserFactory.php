<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str::random(10),
    ];
});

$factory->state(App\User::class, 'H4CK3RZzZ', function (Faker $faker) {
    return [

        'name' => 'H4CK3RZzZ',
        'email' => 'zunnurclash24@gmail.com',
    ];
});

// namespace Database\Factories;

// use App\User;
// use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Str;
