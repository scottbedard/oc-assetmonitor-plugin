<?php

namespace Bedard\AssetMonitor;

use System\Classes\PluginBase;

/**
 * AssetMonitor Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'author'      => 'Scott Bedard',
            'description' => 'Shields.io integration to monitor theme asset sizes',
            'icon'        => 'icon-download',
            'name'        => 'Asset Monitor',
        ];
    }
}
