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
        Schema::create('requirement_checks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('compatibility_result_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->enum('component', [
                'CPU',
                'GPU',
                'RAM',
                'Storage',
                'Operating System',
                'DirectX'
            ]);

            $table->string('required_value');

            $table->string('user_value');

            $table->boolean('passed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirement_checks');
    }
};
