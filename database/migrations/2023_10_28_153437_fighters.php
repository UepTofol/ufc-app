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
        Schema::create('fighters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('nickname', 50);
            $table->integer('height');
            $table->integer('reach');
            $table->integer('age');
            $table->string('country', 50);
            $table->string('region', 50);
            $table->foreignId('divisions_id')->constrained('divisions');
            $table->foreignId('teams_id')->constrained('teams');
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
