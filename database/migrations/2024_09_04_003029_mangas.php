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
            $table->foreignId('classification_id')->constrained()->onDelete('set null');
            $table->text('synopsis')->nullable();
            $table->integer('chapter');
            $table->integer('volume');
            $table->string('author')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('published_by')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('manga_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manga_id')->constrained()->onDelete('cascade');
            $table->foreignId('genre_id')->constrained()->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('manga_user', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('manga_id')->constrained()->onDelete('cascade');
            $table->boolean('library');
            $table->foreignId('status_id')->constrained();
            $table->boolean('favorite')->nullable();
            $table->timestamps();
        });

        Schema::create('manga_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manga_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('set null');
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        Schema::create('manga_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manga_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('set null');
            $table->float('rating')->nullable();
            $table->timestamps();
            $table->unique(['manga_id', 'user_id']);
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
        Schema::dropIfExists('manga_comments');
        Schema::dropIfExists('manga_ratings');
    }
};
