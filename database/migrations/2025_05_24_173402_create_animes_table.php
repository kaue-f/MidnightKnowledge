<?php

use App\Enums\ReviewStateEnum;
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
        Schema::create('animes', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('cover_id')->nullable();
            $table->string('cover_url')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('episodes')->nullable();
            $table->integer('season')->nullable();
            $table->integer('season_count')->nullable();
            $table->integer('ova_special_count')->nullable();
            $table->integer('movie_count')->nullable();
            $table->foreignId('anime_type_id')->nullable()->constrained()->onDelete('set null');
            $table->date('release_date')->nullable();
            $table->foreignUlid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('status')->default(ReviewStateEnum::PENDING->value);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('anime_translations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('anime_id')->constrained()->onDelete('cascade');
            $table->string('title')->index();
            $table->text('synopsis')->nullable();
            $table->string('locale', 5);
            $table->unique(['anime_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
        Schema::dropIfExists('anime_translations');
    }
};
