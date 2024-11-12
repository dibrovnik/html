<?php namespace Dibro\SportTech;

use System\Classes\PluginBase;
// namespace Dibro\SportTech;
use Dibro\SportTech\Middleware\CorsMiddleware;
use Illuminate\Contracts\Http\Kernel;
/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        $this->app[Kernel::class]->pushMiddleware(CorsMiddleware::class);
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Dibro\SportTech\Components\ExerciseComponent' => 'exerciseComponent'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }

    public function registerRoutes()
    {
       
    }

}
