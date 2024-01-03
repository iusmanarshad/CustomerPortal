<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('message', function ($user) {
    return \Illuminate\Support\Facades\Auth::check();
});

Broadcast::channel('announcement', function ($user) {
    return \Illuminate\Support\Facades\Auth::check();
});

Broadcast::channel('chat', function ($user) {
    print_r('broadcasting on chat channel');
    return \Illuminate\Support\Facades\Auth::check();
});
