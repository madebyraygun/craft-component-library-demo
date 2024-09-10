<?php 

namespace modules\blocks;

use craft\elements\Entry;
use madebyraygun\blockloader\base\ContextBlock;

class ImageBlock extends ContextBlock
{
    public function getContext(Entry $block): array
    {
        return [
        ];
    }
}
