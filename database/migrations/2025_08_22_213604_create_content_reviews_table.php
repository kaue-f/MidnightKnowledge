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
        Schema::create('content_reviews', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulidMorphs('content');
            $table->string('status')->default(ReviewStateEnum::PENDING->value);
            $table->foreignUlid('reviewer_id')->constrained('users')->cascadeOnDelete();
            $table->text('review')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_reviews');
    }
};
