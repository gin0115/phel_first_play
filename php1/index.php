<?php

declare(strict_types=1);

use Phel\Phel;

$projectRootDir = __DIR__ . '/';

require $projectRootDir . 'vendor/autoload.php';

// This is the entry point of your phel app
Phel::run($projectRootDir, 'gin0115\views\main');

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
