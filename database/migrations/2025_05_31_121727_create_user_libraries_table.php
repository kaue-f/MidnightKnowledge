<?php

use App\Enums\Status;
use App\Enums\ContentType;
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
                ContentType::ANIME->value,
                ContentType::BOOK->value,
                ContentType::CARTOON->value,
                ContentType::GAME->value,
                ContentType::MANGA->value,
                ContentType::MOVIE->value,
                ContentType::SERIE->value,
            ]);
            $table->boolean('library')->default(true);
            $table->boolean('favorite')->default(false);
            $table->enum('status', [
                Status::PROGRESSO->value,
                Status::LISTA->value,
                Status::FINALIZADO->value,
                Status::PAUSADO->value,
                Status::DROPADO->value
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
