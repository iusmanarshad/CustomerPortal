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
    if ($user->id == $id)
        return ['id' => $user->id, 'first_name' => $user->first_name, 'last_name' => $user->last_name, 'email' => $user->email];
//    return (int) $user->id === (int) $id;
});

Broadcast::channel('message', function ($user) {
    return \Illuminate\Support\Facades\Auth::check();
});

Broadcast::channel('announcement', function ($user) {
    return \Illuminate\Support\Facades\Auth::check();
});

Broadcast::channel('chat', function ($user) {
    return \Illuminate\Support\Facades\Auth::check();
});
