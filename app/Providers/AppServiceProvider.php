<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ParallelTesting::setUpProcess(function ($token) {
            // ...
        });
 
        ParallelTesting::setUpTestCase(function ($token, $testCase) {
            // ...
        });
 
        // Executed when a test database is created...
        ParallelTesting::setUpTestDatabase(function ($database, $token) {
            Artisan::call('db:seed');
        });
 
        ParallelTesting::tearDownTestCase(function ($token, $testCase) {
            // ...
        });
 
        ParallelTesting::tearDownProcess(function ($token) {
            
        });
    }
}
