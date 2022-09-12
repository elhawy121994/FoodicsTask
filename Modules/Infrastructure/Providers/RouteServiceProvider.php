<?php

namespace Modules\Infrastructure\Providers;

use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use Vinkla\Hashids\Facades\Hashids;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\Infrastructure\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->map();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Infrastructure', '/Routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Infrastructure', '/Routes/api.php'));
    }

    protected function getModel($model, $routeKey)
    {
        $id = $this->getId($model, $routeKey);
        $modelInstance = resolve($model);
        return $modelInstance->findOrFail($id);
    }

    protected function getId($model, $routeKey)
    {
        $modelNameArr = explode('\\', $model);
        $modelName = end($modelNameArr);
        try {
            return Hashids::connection($model)->decode($routeKey)[0] ?? null;
        } catch (\Exception $e) {
            throw new NotFound($modelName);
        }
    }
}
