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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->string('genre');
            $table->string('classification', 2);
            $table->text('synopsis')->nullable();
            $table->integer('chapter')->nullable();
            $table->integer('pages')->nullable();
            $table->integer('volume');
            $table->string('series');
            $table->string('author')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('status');
            $table->integer('rating')->nullable();
            $table->boolean('favorite')->nullable();
            $table->text('comment')->nullable();
            $table->string('published_by')->nullable();
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
        Schema::dropIfExists('books');
    }
};
