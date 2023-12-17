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
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }
            if (!Schema::hasColumn('users', 'role_id')) {
                $table->unsignedBigInteger('role_id')->after('password')->nullable();
            }
            if (!Schema::hasColumn('users', 'owner_name')) {
                $table->text('owner_name')->after('id')->nullable();
            }
            if (!Schema::hasColumn('users', 'last_name')) {
                $table->text('last_name')->after('id')->nullable();
            }
            if (!Schema::hasColumn('users', 'first_name')) {
                $table->text('first_name')->after('id')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'name')) {
                $table->string('name')->after('id');
            }
            if (Schema::hasColumn('users', 'role_id')) {
                $table->dropColumn('role_id');
            }
            if (Schema::hasColumn('users', 'first_name')) {
                $table->dropColumn('first_name');
            }
            if (Schema::hasColumn('users', 'last_name')) {
                $table->dropColumn('last_name');
            }
            if (Schema::hasColumn('users', 'owner_name')) {
                $table->dropColumn('owner_name');
            }
        });
    }
};
