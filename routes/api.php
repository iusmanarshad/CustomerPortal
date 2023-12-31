<?php

use App\Http\Controllers;
use App\Http\Controllers\ClientApp\QuestionnaireAPIController;
use App\Http\Controllers\CustomerPortal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::prefix('customer-portal')->group(function () {
        Route::apiResource('clients', CustomerPortal\ClientAPIController::class);

        Route::prefix('announcements')->group(function () {
            Route::get('/clients', [Controllers\AdminAnnouncementController::class, 'getClients']);
            Route::get('/groups', [Controllers\AdminAnnouncementController::class, 'getGroups']);
            Route::post('/groups', [Controllers\AdminAnnouncementController::class, 'createGroup']);
            Route::delete('/groups', [Controllers\AdminAnnouncementController::class, 'removeGroup']);
            Route::post('/members', [Controllers\AdminAnnouncementController::class, 'updateGroupMembers']);
            Route::get('/messages', [Controllers\AdminAnnouncementController::class, 'getGroupMessages']);
            Route::post('/messages', [Controllers\AdminAnnouncementController::class, 'sendMessage']);
        });

        Route::prefix('messages')->group(function () {
            Route::get('/clients', [Controllers\AdminMessageController::class, 'getClients']);
            Route::get('/groups', [Controllers\AdminMessageController::class, 'getGroups']);
            Route::post('/groups', [Controllers\AdminMessageController::class, 'createGroup']);
            Route::get('/messages', [Controllers\AdminMessageController::class, 'getGroupMessages']);
            Route::post('/messages', [Controllers\AdminMessageController::class, 'sendMessage']);
        });
    });


    Route::prefix('client-app')->group(function () {
        Route::apiResource('questionnaire', QuestionnaireAPIController::class)->only([
            'create', 'store', 'update', 'edit'
        ]);

        Route::prefix('announcements')->group(function () {
            Route::get('/groups', [Controllers\ClientAnnouncementController::class, 'getGroups']);
            Route::get('/messages', [Controllers\ClientAnnouncementController::class, 'getGroupMessages']);
        });

        Route::prefix('messages')->group(function () {
            Route::get('/messages', [Controllers\ClientMessageController::class, 'getGroupMessages']);
            Route::post('/messages', [Controllers\ClientMessageController::class, 'sendMessage']);
        });
    });
});


