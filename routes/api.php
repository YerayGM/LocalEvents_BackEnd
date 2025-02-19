<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\AttributeController;
use App\Http\Controllers\Api\AssociationController;
use App\Http\Controllers\Api\InscribeController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\AsisteController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware(['auth:sanctum'])->group(function () {
    Orion::resource('events', EventController::class);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});

// Faltan posibles rutas:
Route::group(['as' => 'api.'], function() {
    Orion::resource('users', UserController::class);
    Orion::resource('attributes', AttributeController::class);
    Orion::resource('associations', AssociationController::class);
    Orion::resource('inscribes', InscribeController::class);
    Orion::resource('posts', PostController::class);
    Orion::resource('comments', CommentController::class);
    Orion::resource('asistes', AsisteController::class);
    Orion::hasManyResource('associations', 'users', AssociationController::class);
    Orion::hasManyResource('posts', 'comments', PostController::class);
    Orion::hasManyResource('events', 'comments', EventController::class);
    Orion::belongsToResource('comments', 'event', CommentController::class);
    Orion::belongsToResource('comments', 'post', CommentController::class);
    Orion::belongsToResource('events', 'inscribes', EventController::class);
    Orion::belongsToResource('events', 'asistes', EventController::class);
});

Route::post('/login', [AuthenticatedSessionController::class, 'store']);