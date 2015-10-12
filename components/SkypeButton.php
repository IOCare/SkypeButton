<?php namespace Iocare\SkypeButton\Components;

use Cms\Classes\ComponentBase;
use iocare\SkypeButton\Models\SkypeButtonSettings;

class SkypeButton extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'SkypeButton Component',
            'description' => 'Insert Skype Call/Chat Button inside you pages'
        ];
    }

	public function defineProperties(){
		return [
			'code' => [
				'title'             => 'Skype Name',
				'description'       => 'Your Skype name can found in your skype account',
				'default'           => '',
				'type'              => 'string',
				'validationPattern' => '^[a-z0-9_-]{3,15}$',
				'validationMessage' => 'Not a Skype name',
				'placeholder'       => 'skypenameid'
			],
			'imageSize' => [
				'title'             => 'ImageSize',
				'description'       => 'Skype Button Image size only enter 10,12,14,16,24 or 32 only',
				'default'           => '32',
				'type'              => 'string',
				'validationPattern' => '^[0-9]*$',
				'validationMessage' => 'Invalid Image Size',
				'placeholder'       => '32'
			]
		];
	}

   public function onRender()
    {
        $settings = SkypeButtonSettings::instance();
        $this->page['code'] = $settings->code;
		$this->page['imageSize'] = $settings->imageSize;
    }


}