<?php

namespace App\Providers;

use App\Models\MyModel;
use App\Wrappers\CustomWrapper;
use Illuminate\Support\ServiceProvider;
use Cristal\ApiWrapper\Transports\Transport;
use Curl\Curl;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        MyModel::setApi($this->app->make(CustomWrapper::class));
    }

    public function register()
    {
        $this->app->bind(CustomWrapper::class, function(){
            $transport = new Transport(
                'http://94.254.0.188:4000',
                $this->app->make(Curl::class)
            );
            return new CustomWrapper($transport);
        });
    }

}
