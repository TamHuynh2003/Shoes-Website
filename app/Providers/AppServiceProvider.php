<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        // Validator::extend('username', function ($attribute, $value, $parameters, $validator) {
        //     return \App\Models\Users::where('username', $value)->exists();
        // });

        // Validator::replacer('username', function ($message, $attribute, $rule, $parameters) {
        //     return str_replace(':attribute', $attribute, $message);
        // });
    }
}
