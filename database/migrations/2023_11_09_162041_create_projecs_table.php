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
        Schema::create('projecs', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image')->nullable();
            $table->string('repo_name')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projecs');
    }
};