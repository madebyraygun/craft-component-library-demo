<?php

use Faker\Factory as Faker;
$faker = Faker::create();

return [
  'title' => 'Rich Text',
  'context' => [
    'body' => '<h3>' . $faker->sentence() . '</h3><p>' . $faker->paragraph() . '</p><p>' . $faker->paragraph() . '</p><p>' . $faker->paragraph() . '</p>'
  ],
  'variants' => [
    [
      'name' => 'Short',
      'context' => [
        'body' => '<h3>' . $faker->sentence() . '</h3><p>' . $faker->paragraph() . '</p>'
      ]
    ]
  ]
];
