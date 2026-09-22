<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
            $this->mapApiRoutes();
    }
protected function mapApiRoutes():void
{
    Route::prefix('v1')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
}
}
