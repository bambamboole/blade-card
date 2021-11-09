<?php

namespace Bambamboole\BladeCard;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class CardServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'blade-card');

        Nova::serving(function (ServingNova $event) {
            Nova::script('blade-card', __DIR__.'/../dist/js/card.js');
        });
    }
}
