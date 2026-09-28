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
        Schema::create('movies', function (Blueprint $table) {
            // Primary key
            $table->id();

            // Movie title
            $table->string('title');

            // URL-friendly movie name
            $table->string('slug')->unique();

            // Movie description
            $table->text('description')->nullable();

            // Poster image path
            $table->string('poster')->nullable();

            // Trailer URL
            $table->string('trailer')->nullable();

            // Movie release year
            $table->year('release_year');

            // Movie duration in minutes
            $table->integer('duration');

            // Category ID
            $table->integer('category_id');

            // Active / Inactive
            $table->boolean('status')->default(true);

            // Created_at and Updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
