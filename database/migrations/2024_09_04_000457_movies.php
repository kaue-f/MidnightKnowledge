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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->text('synopsis')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->time('duration')->nullable();
            $table->date('release_date')->nullable();
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        schema::create('movie_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->foreignId('genre_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('movie_user', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->boolean('library');
            $table->foreignId('status_id')->constrained();
            $table->boolean('favorite')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('movie_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('movie_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->float('rating')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['movie_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
        Schema::dropIfExists('movie_genre');
        Schema::dropIfExists('movie_user');
        Schema::dropIfExists('movie_comments');
        Schema::dropIfExists('movie_ratings');
    }
};
