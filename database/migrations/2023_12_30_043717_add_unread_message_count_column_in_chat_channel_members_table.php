<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat_channel_members', function (Blueprint $table) {
            if (!Schema::hasColumn('chat_channel_members', 'unread_message_count')) {
                $table->string('unread_message_count')->after('is_active')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat_channel_members', function (Blueprint $table) {
            if (!Schema::hasColumn('chat_channel_members', 'unread_message_count')) {
                $table->dropColumn('unread_message_count');
            }
        });
    }
};
