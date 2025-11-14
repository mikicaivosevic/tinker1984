<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("tinker1984_sessions", function (Blueprint $table) {
            $table->id();
            $table->text("reason");
            $table->foreignId("tinker1984_user_id")->nullable()->index();
            $table->timestamps();
        });

        Schema::create("tinker1984_users", function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->timestamps();
        });

        Schema::create("tinker1984_commands", function (Blueprint $table) {
            $table->id();
            $table->text("statements");
            $table->foreignId("tinker1984_session_id")->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tinker1984_sessions");
        Schema::dropIfExists("tinker1984_users");
        Schema::dropIfExists("tinker1984_commands");
    }
};
