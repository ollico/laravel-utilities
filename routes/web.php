<?php

use Illuminate\Support\Facades\Route;
use Ollico\Utilities\Controllers\SitemapController;

Route::get('/sitemap', SitemapController::class);
