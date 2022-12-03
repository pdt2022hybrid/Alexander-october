<?php namespace Hidas\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * test Plugin Information File
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
            'name'        => 'test',
            'description' => 'No description provided yet...',
            'author'      => 'Hidas',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Hidas\Test\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'hidas.test.some_permission' => [
                'tab' => 'test',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'test' => [
                'label'       => 'test',
                'url'         => Backend::url('hidas/test/notes'),
                'icon'        => 'icon-leaf',
                'permissions' => ['hidas.test.*'],
                'order'       => 500,
            ],
        ];
    }
}
