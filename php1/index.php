<?php

declare(strict_types=1);

$runtime = require __DIR__ . '/vendor/PhelRuntime.php';

$runtime->loadNs('gin0115\views\main');


// Generates the JSON
// include __DIR__ . '/vendor/autoload.php';

// $faker = Faker\Factory::create();
// $users = [];
// for ($i = 0; $i < 350; $i++) {
//     $users[] =
//         (object)[
//             'id' => $i + 1,
//             'name' => $faker->name(),
//             'address' => $faker->address,
//             'email' => $faker->email,
//             'phoneNumber' => $faker->phoneNumber,
//         ];
// }

// file_put_contents(__DIR__ . '/users.json', json_encode($users));