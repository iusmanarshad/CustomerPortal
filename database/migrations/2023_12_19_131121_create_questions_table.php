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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->text('key');
            $table->text('parent_key')->nullable();
            $table->text('question');
            $table->string('type');
            $table->boolean('is_required')->default(1)->comment('1->Yes,0->No');
            $table->boolean('active')->default(1)->comment('1->Yes,0->No');
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
        Schema::dropIfExists('questions');
    }
};
