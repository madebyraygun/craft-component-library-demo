<?php 

namespace modules\blocks;

use craft\elements\Entry;
use madebyraygun\blockloader\base\ContextBlock;

class CardsBlock extends ContextBlock
{
    public function getContext(Entry $block): array
    {
        $cards = $block->card->all();
        if (!$cards) {
            return [];
        }
        $cardsArray = [];
        $sources = ['300w', '450w', '600w'];
        $transform = [
            'mode' => 'fit',
            'width' => 450,
            'height' => 450,
        ];
        foreach ($cards as $card) {
            $image = $card->image->one();
            $image = $image->setTransform($transform);
            if ($image) {
                $style = '';
                if ($image->hasFocalPoint) {
                    $x = $image->focalPoint['x'] * 100 . '%';
                    $y = $image->focalPoint['y'] * 100 . '%';
                    $style = 'object-position: ' . $x . ' ' . $y;
                }
                 $cardImage = [
                    'src' => $image->getUrl(),
                    'srcset' => $image->getSrcset($sources),
                    'alt' => $image->alt,
                    'lazy' => true,
                    'style' => $style,
                    'width' => $image->width,
                    'height' => $image->height,
                    'caption' => '',
                ];
            }
            $cardsArray[] = [
                'title' => $card->title,
                'shortDescription' => $card->shortDescription,
                'image' => $cardImage,
                'url' => $card->cardLink,
            ];
        }

        
        return [
            'cards' => $cardsArray,
        ];
    }
}
