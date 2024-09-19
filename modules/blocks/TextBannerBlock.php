<?php 

namespace modules\blocks;

use craft\elements\Entry;
use madebyraygun\blockloader\base\ContextBlock;
use madebyraygun\blockloader\base\ContextBlockSettings;

class TextBannerBlock extends ContextBlock
{

    protected function onInit(ContextBlockSettings $settings): void
    {
        $settings->templateHandle('text');
    }
    public function getContext(Entry $block): array
    {
        return [
            'heading' => $block->heading,
            'text' => $block->shortDescription
        ];
    }
}
