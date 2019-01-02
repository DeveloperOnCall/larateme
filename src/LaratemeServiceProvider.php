<?php

namespace DeveloperOnCall\Larateme;

use Illuminate\Support\ServiceProvider;
use DeveloperOnCall\Larateme\Commands\InstallCommand;

class LaratemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../public' => public_path(''),
        ], 'larateme:assets');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'larateme');
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/larateme'),
        ], 'larateme:lang');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'larateme');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/larateme'),
        ], 'larateme:view');

        $this->mergeConfigFrom(__DIR__.'/../config/larateme.php', 'larateme');
        $this->publishes([
            __DIR__.'/../config' => config_path(''),
        ], 'larateme:config');

        $this->publishes([
            $this->packagePath('resources/stubs/auth/login.blade.php.stub') => base_path('resources/views/auth/login.blade.php'),
            $this->packagePath('resources/stubs/auth/register.blade.php.stub') => base_path('resources/views/auth/register.blade.php'),
            $this->packagePath('resources/stubs/auth/passwords/email.blade.php.stub') => base_path('resources/views/auth/passwords/email.blade.php'),
            $this->packagePath('resources/stubs/auth/passwords/reset.blade.php.stub') => base_path('resources/views/auth/passwords/reset.blade.php'),
            $this->packagePath('resources/stubs/auth/verify.blade.php.stub') => base_path('resources/views/auth/verify.blade.php'),
            $this->packagePath('resources/stubs/home.blade.php.stub') => base_path('resources/views/home.blade.php'),
        ], 'larateme:auth');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

    /**
     * Generate a path relative to the package root directory.
     *
     * @param $path
     * @return string
     */
    private function packagePath($path)
    {
        return __DIR__."/../$path";
    }
}