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
        Schema::create('minimum_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('cpu_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('gpu_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('operating_system');

            $table->unsignedTinyInteger('ram'); // GB

            $table->unsignedSmallInteger('storage'); // GB

            $table->string('directx_version')->nullable();

            $table->string('sound_card')->nullable();

            $table->text('additional_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minimum_requirements');
    }
};
