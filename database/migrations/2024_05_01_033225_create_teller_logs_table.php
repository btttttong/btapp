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
        Schema::create('teller_log', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('day_id');
            $table->foreignId('aspect_id');
            $table->foreignId('color_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teller_log');
    }
};
