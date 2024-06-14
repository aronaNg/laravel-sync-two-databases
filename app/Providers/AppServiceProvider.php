<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\OldTableModel;
use App\Models\NewTableModel;
use App\Observers\OldTableObserver;
use App\Observers\NewTableObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        OldTableModel::observe(OldTableObserver::class);
        NewTableModel::observe(NewTableObserver::class);
    }
}
