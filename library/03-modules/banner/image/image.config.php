<?php

use Faker\Factory as Faker;
$faker = Faker::create();

return [
  'title' => 'Banner Image',
  'context' => [
    'heading' => $faker->sentence(),
    'image' => '@elements/image'
  ]
];
