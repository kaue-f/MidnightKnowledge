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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->text('synopsis')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->time('duration')->nullable();
            $table->date('release_date')->nullable();
            $table->string('developed_by')->nullable();
            $table->enum('plataform', [
                'Android',
                'Battle.net',
                'Epic Games Store',
                'iOS',
                'Nintendo 3DS',
                'Nintendo DS',
                'Nintendo Switch',
                'Origin',
                'Outros',
                'PlayStation 1',
                'PlayStation 2',
                'PlayStation 3',
                'PlayStation 4',
                'PlayStation 5',
                'PlayStation Vita',
                'PSP',
                'Steam',
                'Ubisoft Connect',
                'Xbox 360',
                'Xbox One',
                'Xbox Series X/S',
            ]);
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        schema::create('game_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignId('genre_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('game_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->boolean('library');
            $table->foreignId('status_id')->constrained();
            $table->boolean('favorite')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('game_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('game_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->float('rating')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['game_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
        Schema::dropIfExists('game_genre');
        Schema::dropIfExists('game_user');
        Schema::dropIfExists('game_comments');
        Schema::dropIfExists('game_ratings');
    }
};
