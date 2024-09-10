<?php 

use Faker\Factory as Faker;
$faker = Faker::create();

$tagClassMap = [
  'h1' => 'heading-1',
  'h2' => 'heading-2',
  'h3' => 'heading-3',
  'h4' => 'heading-4',
  'h5' => 'heading-5',
  'h6' => 'heading-6',
];

$variants = [];

foreach ($tagClassMap as $level => $class) {
	$variants[] = [
		'name' => $level,
		'context' => [
			'level' => $level,
			'class' => $class,
			'text' => $faker->sentence()
		]
	];
}

$first = array_shift($variants);

return [
	'name' => $first['name'],
	'context' => $first['context'],
	'variants' => $variants
];
