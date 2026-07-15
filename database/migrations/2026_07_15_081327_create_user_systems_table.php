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
        Schema::create('user_systems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->foreignId('cpu_id')->constrained()->cascadeOnDelete();

            $table->foreignId('gpu_id')->constrained()->cascadeOnDelete();

            $table->string('operating_system');

            $table->unsignedTinyInteger('ram');

            $table->unsignedSmallInteger('storage');

            $table->string('directx_version')->nullable();

            $table->boolean('is_primary')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_systems');
    }
};
