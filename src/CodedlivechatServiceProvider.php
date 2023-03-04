<?php

namespace Coded\Codedlivechat;

use Coded\Codedlivechat\Console\deletehistory;
use Coded\Codedlivechat\Facades\LivesupportRender;
use Coded\Codedlivechat\LivesupportRender as Renders;
use Coded\Codedlivechat\Middleware\Livechatadmin;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CodedlivechatServiceProvider extends ServiceProvider
{

  public function register()
  {
    /**
     * Finally, we register the binding in the service container in
     * our service provider:
     */

    $this->app->bind('LivesupportRender', function($app) {
        return new Renders();
    });

    if ($this->app->runningInConsole()) {

    $this->mergeConfigFrom(__DIR__.'/config/livechat.php', 'livechat');

    }
  }

  public function boot()
  {
    /**
     * finally lets set a Blade directives
     * for our facade accessor in our service container in the sevice provider.
     */

     Blade::directive("LivechatId", function () {
        return Renders::LivechatId();
     });


     /**
      * register the command
      */

    if ($this->app->runningInConsole()) {

        $this->commands([
            deletehistory::class,
        ]);

        $this->app->booted(function () {
            $schedule = $this->app->make(Schedule::class);
            $schedule->command('delete:chats')->everyMinute();
        });
    }

    /**
     * load the application services for live support chat
     */

     $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
     $this->loadViewsFrom(__DIR__ . '/resources/views', 'codedlivechat');
     $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');



     /**
      * publish assets
    */

    $this->publishes([
        __DIR__.'/config/livechat.php' => config_path('livechat.php'),
      ], 'config');

    $this->publishes([
        __DIR__ . '/public/codedlivechat' => public_path('codedlivechat'),
    ], 'assets');

    $this->publishes([
        __DIR__ . '/resources/views' => resource_path('views/codedlivechat'),
    ], 'views');


    /**
     * Gate authentication \ Middleware
     */

     $router = $this->app->make(Router::class);
     $router->aliasMiddleware('livechatadmin', Livechatadmin::class);


  }

}
