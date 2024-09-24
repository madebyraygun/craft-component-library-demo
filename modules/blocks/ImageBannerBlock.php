<?php 

namespace modules\blocks;

use craft\elements\Entry;
use Craft;
use madebyraygun\blockloader\base\ContextBlock;

class ImageBannerBlock extends ContextBlock
{

    public function setSettings(): void
    {
        $this->settings
            ->templateHandle('@modules/banner/image');
    }
    public function getContext(Entry $block): array
    {
        if (!$block->image || !$block->image->one()) {
            return [];
        }
        $image = $block->image->one();

        $transform = [
            'mode' => 'crop',
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
            'caption' => '',
        ];
        return [
            'heading' => $block->heading,
            'image' => $image,
        ];
    }
}
