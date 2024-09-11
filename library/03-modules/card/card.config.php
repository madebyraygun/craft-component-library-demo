<?php

use Faker\Factory as Faker;
$faker = Faker::create();

return [
  'title' => 'Card',
  'context' => [
    'title' => $faker->sentence(),
    'image' => '@elements/image',
    'url' => $faker->url(),
    'shortDescription' => $faker->paragraph(),
  ]
];
