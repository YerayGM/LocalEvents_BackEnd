<?php

use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\PostsController;

Route::group(['as' => 'api.'], function() {
    Orion::resource('posts', PostsController::class);
});

