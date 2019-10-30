<?php

namespace Wirepick\Smsapi;

use Illuminate\Support\ServiceProvider;

class WirepickSmsApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('wirepick\smsapi\SmsController');
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
