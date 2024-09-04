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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->string('genres');
            $table->text('synopsis')->nullable();
            $table->string('classification', 2);
            $table->integer('episodes')->nullable();
            $table->integer('season')->nullable();
            $table->date('release_date')->nullable();
            $table->string('status');
            $table->integer('rating')->nullable();
            $table->boolean('favorite')->nullable();
            $table->text('comment')->nullable();
            $table->foreignUuid('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
