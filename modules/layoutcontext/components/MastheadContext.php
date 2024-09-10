<?php

namespace modules\layoutcontext\components;

use Craft;

class MastheadContext
{
    public static function Hook()
    {
        Craft::$app->view->hook('global-context', function(array &$context) {
            $context['masthead_context'] = [
                'siteTitle' => self::getSiteTitle(),
            ];
        });
    }

    private static function getSiteTitle()
    {
        return Craft::$app->getSites()->getCurrentSite()->name;;
    }
}
