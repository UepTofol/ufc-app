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
        Schema::create('fights_events', function (Blueprint $table){
            $table->id();
            $table->string('result', 70);
            $table->foreignId('fighter_blue_id')->constrained('fighters');
            $table->foreignId('fighter_red_id')->constrained('fighters');
            $table->foreignId('divisions_id')->constrained('divisions');
            $table->foreignId('events_id')->constrained('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
