<?php


declare(strict_types=1);

use craft\ecs\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function(ECSConfig $ecsConfig): void {
    $ecsConfig->parallel();

    /* Check git for changed files */
    $changedFiles = shell_exec('git diff --name-only modules | grep -E \'\.php$\' | sed \'s/craft//g\'');

    /* limit ECS to changed files only, if the repo is clean then check the entire modules directory */
    if ($changedFiles) {
        $changedFileList = explode("\n", trim($changedFiles));
        $paths = [];
        foreach ($changedFileList as $changedFile) {
            if (!file_exists(__DIR__ . $changedFile)) {
                continue;
            }
            $paths[] = __DIR__ . $changedFile;
        }
        $ecsConfig->paths($paths);
    } else {
        $ecsConfig->paths([
            __DIR__ . '/modules'
        ]);
    }
    $ecsConfig->sets([SetList::CRAFT_CMS_4]);
};
