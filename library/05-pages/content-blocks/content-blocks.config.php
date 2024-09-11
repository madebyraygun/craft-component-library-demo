<?php 

return [
  'name' => 'Content Blocks',
  'context' => [
    'blocks' => [
      [
        'name' => 'Cards',
        'handle' => 'cards',
        'context' => '@content-blocks/cards'
      ],
      [
        'name' => 'Rich Text',
        'handle' => 'rich-text',
        'context' => '@content-blocks/rich-text'
      ],
      [
        'name' => 'Image',
        'handle' => 'image',
        'context' => '@content-blocks/image'
      ],
    ]
  ]
];
