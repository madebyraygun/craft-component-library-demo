<?php 

use craft\helpers\App;

$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
return [
  'blocksNamespace' => 'modules\blocks', // default is 'blocks'
  'scanNewFiles' => $isDev, // Set to false in production and use composer dump-autoload
  'enableCaching' => !$isDev, // Set to true in production to cache the output of your blocks
];
