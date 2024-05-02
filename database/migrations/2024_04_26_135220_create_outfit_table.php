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
        Schema::create('outfit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('type_id');
            $table->string('image_url');
            $table->foreignId('user_id');
            $table->foreignId('color_id');
            $table->foreignId('ocation_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outfit');
    }
};
