<?php namespace iocare\SkypeButton\Models;

use Model;

/**
 * SkypeButtonSettings Model
 */
class SkypeButtonSettings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];
    
    public $settingsCode = 'iocare_skype_button';

    public $settingsFields = 'fields.yaml';

}

