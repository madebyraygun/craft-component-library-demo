<?php 

namespace modules\blocks;

use craft\elements\Entry;
use madebyraygun\blockloader\base\ContextBlock;

class TextBannerBlock extends ContextBlock
{

    public function setSettings(): void
    {
        $this->settings
            ->templateHandle('@modules/banner/text');
    }
    public function getContext(Entry $block): array
    {
        return [
            'heading' => $block->heading,
            'text' => $block->shortDescription
        ];
    }
}
