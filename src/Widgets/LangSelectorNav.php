<?php

namespace D4T\Admin\Widgets\Navs;

use Dcat\Admin\Widgets\Widget;
use Illuminate\Support\Facades\App;
use Dcat\Admin\DcatIcon;

class LangSelectorNav extends Widget
{
    protected $view = 'dev4traders::d4t-admin-lang-selector';

    public function __construct( public bool $useFlags = false, public DcatIcon $icon = DcatIcon::GLOBE)
    {
        $this->id('lang-selector-' . uniqid());
    }

    public function defaultVariables()
    {
        return [
            'icon' => $this->icon->_(),
            'useFlags' => $this->useFlags,
            'current_url' => request()->path(),
            'current_locale' => App::getLocale(),
            'locales' => config('admin.supported_locales'),
            'attributes' => $this->formatHtmlAttributes(),
        ];
    }
}
