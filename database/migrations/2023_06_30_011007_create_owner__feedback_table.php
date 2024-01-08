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
        Schema::create('owner__feedback', function (Blueprint $table) {
            $table->id();
            $table->integer('star_rating');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner__feedback');
    }
};