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
        Schema::create('chat_channel_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('channel_id');
            $table->unsignedInteger('user_id');
            $table->string('type');
            $table->text('message')->nullable();
            $table->text('metadata')->nullable();
            $table->boolean('is_blocked')->default(false);
            $table->dateTime('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_channel_messages');
    }
};
