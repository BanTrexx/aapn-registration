<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('agent_code');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('location')->nullable();
            $table->string('address')->default('JAKARTA');
            $table->string('food')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('partner')->nullable();
            $table->string('partner_address')->nullable();
            $table->string('partner_food')->nullable();
            $table->tinyInteger('role');
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }
};
