<?php

use App\Http\Controllers;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('announcements')->group(function () {
    Route::get('/clients', [Controllers\AdminAnnouncementController::class, 'getClients']);
    Route::get('/channels', [Controllers\AdminAnnouncementController::class, 'getChannels']);
    Route::get('/channel/messages', [Controllers\AdminAnnouncementController::class, 'getChannelMessages']);
});
