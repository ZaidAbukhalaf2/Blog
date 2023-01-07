<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\VarDumper\Server\Connection;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Connection::class, function ($app) {
            return new Connection(config('riak'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
