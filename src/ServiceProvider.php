<?php

namespace D4T\Admin\LangSelector;

use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Navbar;
use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Extend\ServiceProvider as ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{
    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::ADDON;
    }

    public function settingForm()
    {
        return new Setting($this);
    }

    public function init()
    {
        parent::init();

        $this->loadConfig();

        Admin::navbar(function(Navbar $navbar) {
            $navbar->addNav(new LangSelectorNav());
        });
    }

    public function loadConfig(){
        $this->publishes([
            __DIR__.'/../config/lang-selector.php' => config_path('lang-selector.php')
        ], 'config');
    }

}
