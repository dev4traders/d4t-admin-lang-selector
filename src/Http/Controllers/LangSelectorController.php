<?php

namespace D4T\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use D4T\Admin\LangSelector\ServiceProvider;

class LangSelectorController extends Controller
{

    public function setLocale(string $key)
    {
        $url = request('url');
        Session::put('locale', $key);
        admin_toastr(ServiceProvider::trans('lang-selector.language_changed'));

        return admin_redirect(admin_url($url));
    }
}