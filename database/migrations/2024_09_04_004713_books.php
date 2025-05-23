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
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('image')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->text('synopsis')->nullable();
            $table->integer('chapter')->nullable();
            $table->integer('pages')->nullable();
            $table->integer('volume')->nullable();
            $table->string('series')->nullable();
            $table->string('author')->nullable();
            $table->date('release_date')->nullable();
            $table->string('published_by')->nullable();
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('book_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('book_id')->constrained()->onDelete('cascade');
            $table->foreignId('genre_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('book_user', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('book_id')->constrained()->onDelete('cascade');
            $table->boolean('library');
            $table->enum('status', [
                'PROGRESSO',
                'LISTA',
                'FINALIZADO',
                'PAUSADO',
                'DROPADO',
            ])->nullable();
            $table->boolean('favorite')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('book_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('book_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->text('comment')->nullable();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('book_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('book_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->float('rating')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['book_id', 'user_id']);
        });

        Schema::create('formats', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('book_formats', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('book_id')->constrained()->onDelete('cascade');
            $table->foreignId('format_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('book_genre');
        Schema::dropIfExists('book_user');
        Schema::dropIfExists('book_comments');
        Schema::dropIfExists('book_ratings');
        Schema::dropIfExists('formats');
        Schema::dropIfExists('book_formats');
    }
};
