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
        Schema::create('aapn_users', function (Blueprint $table) {
            $table->id()->primary();
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
    }

    public function down(): void
    {
        Schema::dropIfExists('aapn_users');
    }
};
