<?php 

namespace modules\blocks;
use madebyraygun\blockloader\base\ContextBlock;

class MarkupBlock extends ContextBlock
{
  public function setSettings(): void
    {
      $this->settings
        ->templateHandle('rich-text');
    }
  public function getMarkupContext(string $markup): array
  {
    return [
      'body' => $markup,
    ];
  }
}
