<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Views'   => resource_path('views/vendor/admin'),
            __DIR__.'/../public/' => public_path('vendor/assets/'),
        ], 'adminstart');

    }

    public function register()
    {

    }
}
