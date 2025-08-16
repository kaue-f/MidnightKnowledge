<?php

use App\Enums\StatusEnum;
use App\Enums\ContentTypeEnum;
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
        Schema::create('user_libraries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->uuid('content_id');
            $table->enum('content_type', [
                ContentTypeEnum::ANIME->value,
                ContentTypeEnum::BOOK->value,
                ContentTypeEnum::CARTOON->value,
                ContentTypeEnum::GAME->value,
                ContentTypeEnum::MANGA->value,
                ContentTypeEnum::MOVIE->value,
                ContentTypeEnum::SERIE->value,
            ]);
            $table->boolean('library')->default(true);
            $table->boolean('favorite')->default(false);
            $table->enum('status', [
                StatusEnum::PROGRESS->value,
                StatusEnum::PLANNED->value,
                StatusEnum::COMPLETED->value,
                StatusEnum::PAUSED->value,
                StatusEnum::DROPPED->value
            ])->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['user_id', 'content_id', 'content_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_libraries');
    }
};
