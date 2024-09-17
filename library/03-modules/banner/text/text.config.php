 <?php

use Faker\Factory as Faker;
$faker = Faker::create();

return [
  'title' => 'Banner Text',
  'context' => [
    'heading' => $faker->sentence(),
    'text' => $faker->sentences(2, true)
  ]
];
