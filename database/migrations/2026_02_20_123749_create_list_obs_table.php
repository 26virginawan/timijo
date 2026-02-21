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
        Schema::create('list_obs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('keterangan')->nullable();
            $table
                ->foreignId('zona_ob_id')
                ->constrained('zona_obs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_obs');
    }
};
