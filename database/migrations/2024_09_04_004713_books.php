<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->string('genre');
            $table->string('classification',2);
            $table->text('synopsis');
            $table->integer('chapter')->nullable();
            $table->integer('pages');
            $table->integer('volume');
            $table->string('series');
            $table->string('author');
            $table->date('publication_date')->nullable();
            $table->string('status');
            $table->integer('rating')->nullable();
            $table->boolean('favorite')->nullable();
            $table->text('comment')->nullable();
            $table->string('developed_by');
            $table->string('plataform');
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
