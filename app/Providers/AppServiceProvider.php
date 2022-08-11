<?php

namespace App\Providers;

use App\Models\Kd03;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // View::share('belum', Kd03::all()->where('status_form', '!=', 'inputted')->count());
        View::share('dm', Kd03::all()->where('status_form', 'created')->count());
        View::share('gm', Kd03::all()->where('status_form', 'submitted')->count());
        View::share('dmFin', Kd03::all()->where('status_form', 'acknowledged')->count());
        View::share('gmFin', Kd03::all()->where('status_form', 'aprv 1')->count());
        View::share('doc', Kd03::all()->where('status_form', 'aprv 2')->count());
    }
}
