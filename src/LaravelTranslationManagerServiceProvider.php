<?php

namespace Justijndepover\LaravelTranslationManager;

use Illuminate\Support\ServiceProvider;

class TranslationManagerServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\TranslationAddCommand::class,
                Commands\TranslationScanCommand::class,
                Commands\TranslationScanViewsCommand::class,
            ]);
        }
    }

    public function boot()
    {
    }
}