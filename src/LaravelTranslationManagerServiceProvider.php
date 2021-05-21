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
            ]);
        }
    }

    public function boot()
    {
    }
}