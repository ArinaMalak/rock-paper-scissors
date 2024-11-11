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
        Schema::create('game_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('player_name');
            $table->string('computer_choice');
            $table->string('player_choice');
            $table->string('result');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_statistics');
    }
};
