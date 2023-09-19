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
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('audition')->default(0);
            $table->foreignId('genre_id')->references('id')->on('genres');
            $table->foreignId('composer_id')->references('id')->on('сomposers');
            $table->text('cover')->nullable()->default('');
            $table->text('music');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
