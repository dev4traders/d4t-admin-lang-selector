<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use D4T\Admin\Http\Controllers\LangSelectorController;

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'middleware'    => config('admin.route.middleware')
], function (Router $router) {
    $router->get('locale/{key}', function (string $key) {
        return (new LangSelectorController())->setLocae($key);
    })->name('index', 'set-locale');
});