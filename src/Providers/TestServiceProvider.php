<?php

namespace kovyakin\test\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {
    /**
     * Register services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {
        $this->loadRoutesFrom(__DIR__ . '/../routes/test.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'test');
        $this->publishes(
            [
                __DIR__ . '/../resources/views' => resource_path('views/vendor/test'),
            ]
        );
    }
}
