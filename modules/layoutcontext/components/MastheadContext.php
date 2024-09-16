<?php

namespace modules\layoutcontext\components;

use Craft;

class MastheadContext
{
    public static function Hook()
    {
        Craft::$app->view->hook('global-context', function(array &$context) {
            $context['masthead_context'] = [
                'siteUrl' => Craft::$app->getSites()->getCurrentSite()->baseUrl,
                'siteTitle' => Craft::$app->getSites()->getCurrentSite()->name,
                'menuItems' => self::getNavNodes($context)
            ];
        });
    }
    private static function getNavNodes($context)
    {
        $mastheadGlobal = $context['craft']->app->getGlobals()->getSetByHandle('masthead');
        $menuItems = [];
        $entries = $mastheadGlobal->navigationLinks->all();
        foreach ($entries as $entry) {
            $menuItems[] = [
                'text' => $entry->navText,
                'url' => $entry->navLink
            ];
        }
        return $menuItems;
    }
}
