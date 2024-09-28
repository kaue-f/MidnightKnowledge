<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->foreignId('classification_id')->constrained()->onDelete('cascade');
            $table->text('synopsis')->nullable();
            $table->integer('chapter');
            $table->integer('volume');
            $table->string('author')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('published_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('manga_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manga_id')->constrained()->onDelete('cascade');
            $table->foreignId('genre_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('manga_user', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('manga_id')->constrained()->onDelete('cascade');
            $table->foreignId('status_id')->constrained()->onDelete('cascade');
            $table->integer('rating')->nullable();
            $table->boolean('favorite')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangas');
        Schema::dropIfExists('manga_genre');
        Schema::dropIfExists('manga_user');
    }
};
