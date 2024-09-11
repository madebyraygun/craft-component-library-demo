<?php 

namespace modules\blocks;

use craft\elements\Entry;
use madebyraygun\blockloader\base\ContextBlock;

class RichTextBlock extends ContextBlock
{
    public function getContext(Entry $block): array
    {
        return [
            'body' => $block->richText ? (string) $block->richText : ''
        ];
    }
}
