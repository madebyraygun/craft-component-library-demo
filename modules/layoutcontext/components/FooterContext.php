<?php

namespace modules\layoutcontext\components;

use Craft;
use modules\common\EntryUtils;

class FooterContext
{
    public static function Hook()
    {
        Craft::$app->view->hook('global-context', function(array &$context) {
            $set = self::getSet($context, 'footer');
            $context['footer_context'] = [
                'copyrightText' => self::getCopyrightText($context),
            ];
        });
    }

    private static function getSet($context, $handle)
    {
        return $context['craft']->app->getGlobals()->getSetByHandle($handle);
    }

    private static function getCopyrightText($context)
    {
        $footerGlobal = $context['craft']->app->getGlobals()->getSetByHandle('footer');
        $titleString = $footerGlobal->copyrightTitle ?? Craft::$app->getSites()->getCurrentSite()->name;
        return '&copy; ' . date('Y') . ' ' . $titleString;
    }
}
