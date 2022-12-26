<?php namespace Kloos\Squadwe;

use Event;
use System\Classes\PluginBase;
use Kloos\Squadwe\Classes\PageBeforeDisplay;

class Plugin extends PluginBase
{
    // Need this to be also availlable on the settings page
    public $elevated = true;

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Squadwe',
            'description' => 'Squadwe plugin for October CMS',
            'author'      => 'Kloos',
            'icon'        => 'icon-message'
        ];
    }

    public function boot()
    {
        Event::subscribe(PageBeforeDisplay::class);
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'kloos.squadwe.manage_settings' => [
                'tab' => 'Squadwe',
                'label' => 'Manage settings',
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'squadwe' => [
                'label'       => 'Settings',
                'description' => 'Manage your Squadwe settings',
                'category'    => 'Squadwe',
                'icon'        => 'icon-comments',
                'class'       => '\Kloos\Squadwe\Models\Settings',
                'order'       => 500,
                'keywords'    => 'squadwe chat support',
                'permissions' => ['kloos.squadwe.manage_settings'],
            ],
        ];
    }
}