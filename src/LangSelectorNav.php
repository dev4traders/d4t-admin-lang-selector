<?php

namespace D4T\Admin\LangSelector;

use Dcat\Admin\DcatIcon;
use Dcat\Admin\Enums\RouteAuth;
use Dcat\Admin\Widgets\Widget;
use Illuminate\Support\Facades\App;

class LangSelectorNav extends Widget
{
    protected $view = 'dev4traders.d4t-admin-lang-selector::index';

    public function __construct(public bool $useFlags = false, public DcatIcon $icon = DcatIcon::GLOBE)
    {
        $this->id('lang-selector-' . uniqid());
    }

    public function defaultVariables()
    {
        $config = config('lang-selector.supported_locales');
        $locales = collect(ServiceProvider::setting('locales'))->mapWithKeys(function ($key) use ($config) {
            return [
                $key => [
                    'title' => ServiceProvider::trans('lang-selector.' . $key),
                    'dir' => $config[$key]['dir']
                ]
            ];
        });

        return [
            'icon' => $this->icon->_(),
            //'url' => admin_route(RouteAuth::LOCALE()),
            'useFlags' => $this->useFlags,
            'current_url' => request()->path(),
            'current_locale' => App::getLocale(),
            'locales' => $locales,
            'attributes' => $this->formatHtmlAttributes(),
        ];
    }
}
