<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Views'   => resource_path('views/'),
            __DIR__.'/../public/assets' => public_path('assets/'),
        ], 'adminstart');

    }

    public function register()
    {

    }
}
