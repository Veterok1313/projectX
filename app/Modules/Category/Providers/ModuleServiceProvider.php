<?php

namespace App\Modules\Category\Providers;

use App\Providers\ModuleProvider;
use App\Modules\Category\Models\CategoryRepository;

class ModuleServiceProvider extends ModuleProvider
{

    public $module = 'category';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app->bind('category_repository', function(){
            return new CategoryRepository();
        });

        $this->app->make('view')->composer('category::menu', 'App\Modules\Category\Http\ViewComposers\MenuComposer');
    }


}
