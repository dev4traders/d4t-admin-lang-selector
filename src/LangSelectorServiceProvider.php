<?php

namespace D4T\Admin;

use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Extend\ServiceProvider; 

class LangSelector extends ServiceProvider
{
    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::ADDON;
    }    
}
