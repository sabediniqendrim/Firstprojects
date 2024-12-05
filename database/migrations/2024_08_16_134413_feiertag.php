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
        Schema::create('feiertag', function (Blueprint $table) {
            $table->id();
            $table->string('feiertag');
            $table->date('date');
            $table->string('kantone');
            $table->tinyInteger('off');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feiertag');
    }
};
