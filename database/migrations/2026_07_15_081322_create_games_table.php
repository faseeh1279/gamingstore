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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->string('slug')->unique();

            $table->foreignId('developer_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('publisher_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('platform_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->date('release_date')->nullable();

            $table->string('cover_image')->nullable();

            $table->string('banner_image')->nullable();

            $table->text('description')->nullable();

            $table->string('official_website')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
