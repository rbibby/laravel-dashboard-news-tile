<?php

namespace RBibby\NewsTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class NewsTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchDataFromApiCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-news-tile'),
        ], 'dashboard-news-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-news-tile');

        Livewire::component('news-tile', NewsTileComponent::class);
    }
}
