<?php

use Illuminate\Support\Facades\Route;
use Ollico\Utilities\Sitemap\SitemapController;

Route::group(['middleware' => ['web']], function () {
    if (config('ollico.utils.enable_sitemap', false)) {
        Route::get('sitemap', SitemapController::class);
    }
});
