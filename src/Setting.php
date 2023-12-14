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
        $input['allowed_methods'] = Helper::array($input['locales']);

        return $input;
    }

    public function form()
    {
        $this->multipleSelect('locales')->options([]);
    }
}
