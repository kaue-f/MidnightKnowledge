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
        Schema::create('user_bans', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->constrained()->onDelete('cascade');
            $table->string('email');
            $table->string('reason');
            $table->text('details')->nullable();
            $table->timestamp('ban_expires_at')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamp('revoked_at')->nullable();
            $table->foreignUlid('banned_by_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignUlid('revoked_by_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_bans');
    }
};
