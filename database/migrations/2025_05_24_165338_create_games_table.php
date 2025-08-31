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
        Schema::create('games', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('cover_id')->nullable();
            $table->string('cover_url')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->string('duration', 4)->nullable();
            $table->date('release_date')->nullable();
            $table->string('developed_by')->nullable();
            $table->foreignUlid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('status')->default(ReviewStateEnum::PENDING->value);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('game_translations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('game_id')->constrained()->onDelete('cascade');
            $table->string('title')->index();
            $table->text('synopsis')->nullable();
            $table->string('locale', 5);
            $table->unique(['game_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
        Schema::dropIfExists('game_translations');
    }
};
