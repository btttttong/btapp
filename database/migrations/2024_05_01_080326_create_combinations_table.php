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
        Schema::create('outfitCombination', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('top_id');
            $table->foreignId('bottom_id');
            $table->foreignId('shoe_id');
            $table->foreignId('user_id');
            $table->date('date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outfitCombination');
    }
};
