<?php

namespace modules\layoutcontext;

use Craft;
use modules\layoutcontext\components\FooterContext;
use modules\layoutcontext\components\MastheadContext;
use yii\base\Module;

class LayoutContext extends Module
{
    /**
     * Initializes the module.
     */
    public function init()
    {
        // Set a @modules alias pointed to the modules/ directory
        Craft::setAlias('@modules/layoutcontext', $this->getBasePath());
        // Register Component's Hooks
        FooterContext::Hook();
        MastheadContext::Hook();
        parent::init();
    }
}
