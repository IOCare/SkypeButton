<?php namespace iocare\SkypeButton\Components;

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
				'description'       => 'Skype Button Image size',
				'default'           => '24',
				'type'				=>'dropdown',
				'options'			=>['10'=>'10', '12'=>'12', '14'=>'14', '16'=>'16', '24'=>'24', '32'=>'32'],
				'validationMessage' => 'Invalid button Size',
				'placeholder'       => 'Select button Size'
			]
		];
	}

   public function onRender()
    {
        $settings = SkypeButtonSettings::instance();
        $this->page['code'] = $settings->code;
		$this->page['imageSize'] = $settings->imageSize;
    }

	public function onRun()
	{
		//$this->addJs('http://www.skypeassets.com/i/scom/js/skype-uri.js');
	}

}