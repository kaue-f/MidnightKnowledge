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
        Schema::create('movies', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->json('title');
            $table->string('cover_id')->nullable();
            $table->string('cover_url')->nullable();
            $table->json('synopsis')->nullable();
            $table->foreignId('classification_id')->nullable()->constrained()->onDelete('set null');
            $table->time('duration')->nullable();
            $table->date('release_date')->nullable();
            $table->foreignUlid('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('status')->default(ReviewStateEnum::PENDING->value);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
