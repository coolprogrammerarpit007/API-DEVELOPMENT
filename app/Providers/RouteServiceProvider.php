<?php

namespace App\Providers;

use App\Models\RandomJoke;
use Symfony\Component\Routing\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
{
    // parent::boot();

    // Custom route model binding for 'joke' parameter
    // Route::bind('joke', function ($value) {
    //     $joke = \App\Models\RandomJoke::find($value);

    //     if (is_null($joke)) {
    //         abort(404, 'Resource not found'); // Instead of returning an array, use abort to trigger a proper HTTP response.
    //     }

    //     return $joke;
    // });
}

}
