<?php namespace iocare\SkypeButton;

use System\Classes\PluginBase;

/**
 * GoogleAnalyticsCode Plugin Information File
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
            'name'        => 'SkypeButton',
            'description' => 'Insert SkypeButton inside you pages',
            'author'      => 'iocare',
            'icon'        => 'icon-skype',
			'homepage'        => 'http://iocare.in'
        ];
    }
	public function registerComponents(){
		return [
			'iocare\SkypeButton\Components\SkypeButton' => 'skypeId'
		];
	}

	public function registerSettings(){
		return [
			'settings' => [
				'label'       => 'SkypeButton',
				'description' => 'Manage SkypeButton Settings.',
				'icon'        => 'icon-skype',
				'class'       => 'iocare\SkypeButton\Models\SkypeButtonSettings',
				'order'       => 1
			]
		];
	}



}
