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
        Schema::create('model_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_home_id')->constrained('Model_teams');
            $table->foreignId('team_visitor_id')->constrained('Model_teams');
            $table->integer('points_home')->nullable();
            $table->integer('points_visitor')->nullable();
            $table->dateTime('date_match');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_games');
    }
};
