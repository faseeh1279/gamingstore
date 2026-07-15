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
        Schema::create('cpus', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer', 50);
            $table->string('model', 150)->unique();

            $table->unsignedTinyInteger('cores')->nullable();
            $table->unsignedTinyInteger('threads')->nullable();

            $table->decimal('base_clock', 4, 2)->nullable();   // GHz
            $table->decimal('boost_clock', 4, 2)->nullable();  // GHz

            $table->unsignedSmallInteger('release_year')->nullable();

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
        Schema::dropIfExists('cpus');
    }
};
