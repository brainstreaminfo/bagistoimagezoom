<?php

namespace Webkul\ImageZoom\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ImageZoomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'imagezoom');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'imagezoom');

        // Override the specific view
        View::composer('shop::products.view.gallery', function ($view) {
            $view->setPath(base_path('packages/Webkul/ImageZoom/src/Resources/views/products/view/gallery.blade.php'));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}