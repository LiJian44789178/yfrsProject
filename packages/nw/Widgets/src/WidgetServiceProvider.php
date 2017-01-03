<?php
namespace Nw\Widgets;

use Illuminate\Support\ServiceProvider;
use Nw\Widgets\Command\BaseCommand;
use Nw\Widgets\Command\CreateRepositoryCommand;

class WidgetServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('nw.repository',function($app){
           return new CreateRepositoryCommand();
        });
        $this->commands([
            'nw.repository'
        ]);
    }
}