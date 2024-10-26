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
            $table->integer('volume');
            $table->string('series');
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
                'Progresso',
                'Lista',
                'Finalizado',
                'Pausado',
                'Dropado',
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
    }
};
