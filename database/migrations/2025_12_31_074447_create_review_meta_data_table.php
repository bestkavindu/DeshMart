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
        Schema::create('review_meta_data', function (Blueprint $table) {
            $table->id();
            $table->string('review_count')->nullable();
            $table->string('average_rating')->nullable();
            $table->string('years_experience')->nullable();
            $table->string('repairs_done')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_meta_data');
    }
};
