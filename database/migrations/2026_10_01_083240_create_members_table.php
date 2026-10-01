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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            // Member's name
            $table->string('name');

            // Member's unique email
            $table->string('email')->unique();

            // Hashed password
            $table->string('password');

            // Account approval status
            $table->enum('status', ['pending', 'approved', 'rejected'])
                ->default('pending');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
