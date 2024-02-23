<?php

namespace App\Providers;

// app/Providers/AppServiceProvider.php

use Illuminate\Support\ServiceProvider;
use App\Services\ComicAPIService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ComicAPIService::class, function ($app) {
            return new ComicAPIService('https://gateway.marvel.com:443/v1/public/comics?limit=5&offset=0&apikey=80abc3c0af1effd0d3faa76556b40382');

        });
    }
}
