<?php

namespace Admin\Providers;

use Carbon\Carbon;
use Illuminate\Routing\Router;
use SleepingOwl\Admin\Contracts\Navigation\NavigationInterface;
use SleepingOwl\Admin\Contracts\Template\MetaInterface;
use SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $widgets = [
        //\Admin\Widgets\NavigationUserBlock::class,
    ];

    /**
     * @var array
     */
    protected $sections = [
        'App\Models\Page' => 'Admin\Http\Sections\Pages',
        'App\Models\Menu' => 'Admin\Http\Sections\Menus',
        'App\Models\MainPageSlider' => 'Admin\Http\Sections\MainPageSliders',
        'App\User' => 'Admin\Http\Sections\Users',
    ];

    /**
     * @param \SleepingOwl\Admin\Admin $admin
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {

        if (\App::runningInConsole()) {
            return;
        }

        $this->loadViewsFrom(base_path("admin/resources/views"), 'admin');
        $this->registerPolicies('Admin\\Policies\\');

        $this->app->call([
            $this,
            'registerRoutes'
        ]);
        $this->app->call([
            $this,
            'registerNavigation'
        ]);

        parent::boot($admin);

        $this->app->call([
            $this,
            'registerViews'
        ]);
        $this->app->call([
            $this,
            'registerMediaPackages'
        ]);
    }

    /**
     * @param NavigationInterface $navigation
     */
    public function registerNavigation(NavigationInterface $navigation)
    {
        require base_path('admin/navigation.php');
    }

    /**
     * @param WidgetsRegistryInterface $widgetsRegistry
     */
    public function registerViews(WidgetsRegistryInterface $widgetsRegistry)
    {
        foreach ($this->widgets as $widget) {
            $widgetsRegistry->registerWidget($widget);
        }
    }

    /**
     * @param Router $router
     */
    public function registerRoutes(Router $router)
    {
        $router->group([
            'prefix' => config('sleeping_owl.url_prefix'),
            'middleware' => config('sleeping_owl.middleware')
        ], function ($router) {
            require base_path('admin/routes.php');
        });
    }

    /**
     * @param MetaInterface $meta
     */
    public function registerMediaPackages(MetaInterface $meta)
    {
        $packages = $meta->assets()->packageManager();
    }

}
