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
        Schema::create('cartoon_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cartoons', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('image')->nullable();
            $table->text('synopsis')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('episodes')->nullable();
            $table->integer('season')->nullable();
            $table->integer('season_count')->nullable();
            $table->integer('special_count')->nullable();
            $table->integer('movie_count')->nullable();
            $table->foreignId('cartoon_type_id')->nullable()->constrained()->onDelete('set null');
            $table->date('release_date')->nullable();
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cartoon_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('cartoon_id')->constrained()->onDelete('cascade');
            $table->foreignId('genre_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cartoon_user', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('cartoon_id')->constrained()->onDelete('cascade');
            $table->boolean('library');
            $table->enum('status', [
                'PROGRESSO',
                'LISTA',
                'FINALIZADO',
                'PAUSADO',
                'DROPADO'
            ])->nullable();
            $table->boolean('favorite')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cartoon_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('cartoon_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->text('comment')->nullable();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cartoon_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('cartoon_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->float('rating')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['cartoon_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartoon_ratings');
        Schema::dropIfExists('cartoon_comments');
        Schema::dropIfExists('cartoon_user');
        Schema::dropIfExists('cartoon_genre');
        Schema::dropIfExists('cartoons');
        Schema::dropIfExists('cartoon_types');
    }
};
