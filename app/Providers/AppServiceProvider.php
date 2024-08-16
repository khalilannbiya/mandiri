<?php

namespace App\Providers;

use App\Models\WebsiteInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['components.frontend.navbar', 'components.frontend.footer', 'navigation-menu', 'auth.login', 'auth.register', 'layouts.app', 'layouts.frontend', 'layouts.guest'], function ($view) {
            $info = WebsiteInfo::first();
            $view->with('info', $info);
        });
    }
}
