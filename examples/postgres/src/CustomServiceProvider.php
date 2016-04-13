<?php

namespace AbuseIO\Findcontact\Custom;

use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config
        $this->mergeConfigFrom(base_path('vendor/abuseio/findcontact-custom').'/config/Custom.php', 'Findcontact');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
