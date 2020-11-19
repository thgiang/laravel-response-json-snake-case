<?php
namespace THGiang\LaravelSnakeCaseJson;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class SnakeCaseJsonResponseServiceProvider extends ServiceProvider
{
    /**
     * register()
     */
    public function register()
    {
        $view = $this->app->make('view');
        $redirect = $this->app->make('redirect');
        $this->app->singleton(ResponseFactory::class, function () use ($view, $redirect) {
            return new SnakeCaseJsonResponseFactory($view, $redirect);
        });
    }
}
