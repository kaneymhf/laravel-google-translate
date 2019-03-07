<?php

namespace Tanmuhittin\LaravelGoogleTranslate;

use Illuminate\Support\ServiceProvider;
use Tanmuhittin\LaravelGoogleTranslate\Commands\TranslateFilesCommand;

class LaravelGoogleTranslateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                TranslateFilesCommand::class
            ]);
        }
        $this->publishes([
            __DIR__.'/laravel_google_translate.php' => config_path('laravel_google_translate.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
