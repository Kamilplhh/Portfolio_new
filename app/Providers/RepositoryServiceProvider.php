<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\HistoryRepositoryInterface;
use App\Repositories\HistoryRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(HistoryRepositoryInterface::class, HistoryRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
