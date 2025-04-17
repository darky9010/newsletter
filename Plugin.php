<?php namespace MMSocietàServiziSA\Newsletter;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Newsletter',
            'description' => 'Plugin per invio newsletter e gestione iscrizioni.',
            'author'      => 'MMSocietàServiziSA',
            'icon'        => 'icon-envelope'
        ];
    }

    public function registerComponents()
    {
        return [
            'MMSocietàServiziSA\Newsletter\Components\SubscribeForm' => 'subscribeForm',
        ];
    }
}
