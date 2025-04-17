<?php namespace Acme\Newsletter;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Newsletter',
            'description' => 'Plugin per invio newsletter e gestione iscrizioni.',
            'author'      => 'Acme',
            'icon'        => 'icon-envelope'
        ];
    }

    public function registerComponents()
    {
        return [
            'Acme\Newsletter\Components\SubscribeForm' => 'subscribeForm',
        ];
    }
}
