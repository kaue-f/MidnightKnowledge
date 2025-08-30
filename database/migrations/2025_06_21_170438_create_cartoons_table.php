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
        Schema::create('cartoons', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('cover_id')->nullable();
            $table->string('cover_url')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('episodes')->nullable();
            $table->integer('season')->nullable();
            $table->integer('season_count')->nullable();
            $table->integer('special_count')->nullable();
            $table->integer('movie_count')->nullable();
            $table->foreignId('cartoon_type_id')->nullable()->constrained()->onDelete('set null');
            $table->date('release_date')->nullable();
            $table->foreignUlid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('status')->default(ReviewStateEnum::PENDING->value);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cartoon_translations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('cartoon_id')->constrained()->onDelete('cascade');
            $table->string('title')->index();
            $table->text('synopsis')->nullable();
            $table->string('locale', 5);
            $table->unique(['cartoon_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartoons');
        Schema::dropIfExists('cartoon_translations');
    }
};
