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
        Schema::create('anime_user', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('anime_id')->constrained()->onDelete('cascade');
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_user');
    }
};
