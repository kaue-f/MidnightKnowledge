<?php

use App\Enums\RelationTypeEnum;
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
        Schema::create('content_relations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulidMorphs('source');
            $table->ulidMorphs('related');
            $table->string('relation_type')->default(RelationTypeEnum::ADAPTATION);
            $table->unique(['source_id', 'related_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_relations');
    }
};
