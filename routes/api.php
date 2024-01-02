<?php

use App\Http\Controllers;
use App\Http\Controllers\ClientApp\QuestionnaireAPIController;
use App\Http\Controllers\CustomerPortal;
use App\Http\Controllers\CustomerPortal\ClientQuestionnaireAPIController;
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

        Route::prefix('clients')->group(function () {
            Route::put('/invite/{id}', [CustomerPortal\ClientAPIController::class, 'inviteClientByEmail']);
        });

        Route::apiResource('questionnaire', ClientQuestionnaireAPIController::class)->only([
            'create', 'store', 'update', 'edit'
        ]);

        Route::prefix('dashboard')->group(function () {
            Route::get('/stats', [Controllers\AdminController::class, 'getStatistics']);
        });

        Route::prefix('announcements')->group(function () {
            Route::get('/clients', [Controllers\AdminAnnouncementController::class, 'getClients']);
            Route::get('/groups', [Controllers\AdminAnnouncementController::class, 'getGroups']);
            Route::post('/groups', [Controllers\AdminAnnouncementController::class, 'createGroup']);
            Route::delete('/groups', [Controllers\AdminAnnouncementController::class, 'removeGroup']);
            Route::post('/members', [Controllers\AdminAnnouncementController::class, 'updateGroupMembers']);
            Route::get('/messages', [Controllers\AdminAnnouncementController::class, 'getGroupMessages']);
            Route::post('/messages', [Controllers\AdminAnnouncementController::class, 'sendMessage']);
        });

        Route::prefix('chat')->group(function () {
            Route::get('/clients', [Controllers\AdminChatController::class, 'getClients']);
            Route::get('/channels', [Controllers\AdminChatController::class, 'getChannels']);
            Route::post('/channels', [Controllers\AdminChatController::class, 'createChannel']);
            Route::get('/messages', [Controllers\AdminChatController::class, 'getChannelMessages']);
            Route::put('/read-receipt', [Controllers\AdminChatController::class, 'readMessages']);
            Route::post('/messages', [Controllers\AdminChatController::class, 'sendMessage']);
        });

        Route::get('/messages/unread-count', [Controllers\AdminChatController::class, 'getUnreadMessagesCount']);
    });


    Route::prefix('client-app')->group(function () {
        Route::apiResource('questionnaire', QuestionnaireAPIController::class)->only([
            'create', 'store', 'update', 'edit'
        ]);

        Route::prefix('announcements')->group(function () {
            Route::get('/groups', [Controllers\ClientAnnouncementController::class, 'getGroups']);
            Route::get('/messages', [Controllers\ClientAnnouncementController::class, 'getGroupMessages']);
        });

        Route::prefix('chat')->group(function () {
            Route::get('/messages', [Controllers\ClientChatController::class, 'getChannelMessages']);
            Route::put('/read-receipt', [Controllers\ClientChatController::class, 'readMessages']);
            Route::post('/messages', [Controllers\ClientChatController::class, 'sendMessage']);
        });

        Route::get('/messages/unread-count', [Controllers\ClientChatController::class, 'getUnreadMessagesCount']);
    });
});

Route::prefix('schema')->group(function () {
    Route::get('/clear', function () {
        \App\Models\ChatChannelMessage::truncate();
        \App\Models\ChatChannelMember::truncate();
        \App\Models\ChatChannel::truncate();
        \App\Models\Associate::truncate();
        \App\Models\ClientQuestionnaire::truncate();
        \App\Models\ClientInvite::truncate();
        \App\Models\Invite::truncate();
        \App\Models\User::truncate();
        \Illuminate\Support\Facades\DB::table('jobs')->truncate();
        \Illuminate\Support\Facades\DB::table('failed_jobs')->truncate();
        \Illuminate\Support\Facades\DB::table('websockets_statistics_entries')->truncate();
        return response()->json(['message' => 'completed successfully']);
    });
});


