<?php

namespace App\Services;

use App\Models\ChatChannel;
use App\Models\ChatChannelMember;
use App\Models\ChatChannelMessage;
use Carbon\Carbon;

class ChatService
{
    public function createChannel($slug, $name, $description = '')
    {
        $channelData = [
            'slug' => $slug,
            'name' => $name,
            'is_active' => true
        ];

        if (!empty($description)) {
            $channelData['description'] = $description;
        }

        return ChatChannel::create($channelData);
    }

    public function removeChannel($channelId)
    {
        return ChatChannel::where('id', '=', $channelId)->delete();
    }

    public function activateChannel($channelId)
    {
        return ChatChannel::where('id', '=', $channelId)->update(['is_active' => true]);
    }

    public function deactivateChannel($channelId)
    {
        return ChatChannel::where('id', '=', $channelId)->update(['is_active' => false]);
    }

    public function addChannelMember($channelId, $userId)
    {
        return ChatChannelMember::create([
            'channel_id' => $channelId,
            'user_id' => $userId,
            'is_active' => true
        ]);
    }

    public function removeChannelMember($channelId, $userId)
    {
        return ChatChannelMember::query()
            ->where('channel_id', '=', $channelId)
            ->where('user_id', '=', $userId)
            ->delete();
    }

    public function blockChannelMember($channelId, $userId): int
    {
        return ChatChannelMember::query()
            ->where('channel_id', '=', $channelId)
            ->where('user_id', '=', $userId)
            ->update(['is_active' => false]);
    }

    public function unblockChannelMember($channelId, $userId): int
    {
        return ChatChannelMember::query()
            ->where('channel_id', '=', $channelId)
            ->where('user_id', '=', $userId)
            ->update(['is_active' => true]);
    }

    public function addChannelMessage($channelId, $userId, $data)
    {
        $messageData = [
            'channel_id' => $channelId,
            'user_id' => $userId,
            'type' => $data['type'],
            'timestamp' => Carbon::now(),
        ];

        if (isset($data['message'])) {
            $messageData['message'] = $data['message'];
        }

        if (!empty($data['metadata'])) {
            $messageData['metadata'] = json_decode($data['metadata']);
        }

        return ChatChannelMessage::create($messageData);
    }

    public function removeChannelMessage($messageId)
    {
        return ChatChannelMessage::where('id', '=', $messageId)->delete();
    }

    public function blockChannelMessage($messageId)
    {
        return ChatChannelMessage::where('id', '=', $messageId)->update(['is_blocked' => true]);
    }

    public function unblockChannelMessage($messageId)
    {
        return ChatChannelMessage::where('id', '=', $messageId)->update(['is_blocked' => false]);
    }

    public function clearChannelMessageHistory(): ?bool
    {
        return ChatChannelMessage::delete();
    }
}
