<?php

namespace D4T\Admin\LangSelector;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Support\Helper;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('lang-selector.title');
    }

    protected function formatInput(array $input)
    {
        $input['locales'] = Helper::array($input['locales']);

        return $input;
    }

    public function form()
    {

        $config = config('lang-selector.supported_locales');

        $locales = collect($config)->mapWithKeys(function ($_, $key) use ($config) {
            return [ $key => ServiceProvider::trans('lang-selector.' . $key)];
        });

        // dd($locales);
        $this->multipleSelect('locales')->options($locales);
    }
}
