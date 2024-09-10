<?php
return [
  'root' => dirname(__DIR__) . '/library',
  'docs' => dirname(__DIR__) . '/library/docs',
  'aliases' => [
      '@elements' => '02-elements',
      '@modules' => '03-modules',
      '@content-blocks' => '04-content-blocks',
      '@pages' => '05-pages',
  ],
  'browser' => [
    'enabled' => true,
    'requiresLogin' => true,
    'path' => 'component-library',
    'welcome' => '@docs/index',
  ]
];
