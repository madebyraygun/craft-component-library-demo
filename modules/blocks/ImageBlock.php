<?php 

namespace modules\blocks;

use craft\elements\Entry;
use madebyraygun\blockloader\base\ContextBlock;

class ImageBlock extends ContextBlock
{
    public function getContext(Entry $block): array
    {
        if (!$block->image || !$block->image->one()) {
            return [];
        }
        $image = $block->image->one();

        $transform = [
            'mode' => 'fit',
            'width' => 1200,
            'height' => 1200,
        ];

        $sources = ['600w', '900w', '1500w', '2000w'];

        //Focal point support
        $style = '';
        if ($image->hasFocalPoint) {
            $x = $image->focalPoint['x'] * 100 . '%';
            $y = $image->focalPoint['y'] * 100 . '%';
            $style = 'object-position: ' . $x . ' ' . $y;
        }

        $image = $image->setTransform($transform);
        $image = [
            'src' => $image->getUrl(),
            'srcset' => $image->getSrcset($sources),
            'alt' => $image->alt,
            'lazy' => true,
            'style' => $style,
            'width' => $image->width,
            'height' => $image->height,
            'caption' => $image->caption ? (string) $image->caption : '',
        ];
        return [
            'image' => $image,
        ];
    }
}
