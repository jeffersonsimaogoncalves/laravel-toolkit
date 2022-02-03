<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Providers;

use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;
use JustSteveKing\LaravelToolkit\Bus\UseDatabaseTransactions;

class BusServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Bus::pipeThrough(
            pipes: [UseDatabaseTransactions::class],
        );
    }
}
