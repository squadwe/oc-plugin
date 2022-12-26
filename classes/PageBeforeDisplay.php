<?php namespace Kloos\Squadwe\Classes;

use Event;

class PageBeforeDisplay
{
    public function subscribe()
    {
        Event::listen('backend.page.beforeDisplay', function ($controller) {
            $controller->addJs('/js/chatwindow.js', 'Kloos.Squadwe');
            $controller->addCss('/plugins/kloos/squadwe/assets/css/chatwindow.css', 'Kloos.Squadwe');
        });
    }
}