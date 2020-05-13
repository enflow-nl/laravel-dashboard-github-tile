<?php

namespace Enflow\Dashboard\Tile\Github;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class MyTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchDataFromApiCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-github'),
        ], 'dashboard-github-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-github');

        Livewire::component('github', GithubComponent::class);
    }
}
