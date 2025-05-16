<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * This method is used to define the route model bindings, pattern filters,
     * and other route-related logic. It is invoked during the bootstrapping
     * process of the application.
     *
     * @return void
     */
    public function boot(): void
    {
        // Define the routes for the application
        $this->routes(function () {

            // Define routes for API, with 'api' middleware and 'api' prefix
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            // Define routes for Web, with 'web' middleware
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
