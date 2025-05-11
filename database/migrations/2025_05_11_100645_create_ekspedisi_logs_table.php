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
        Schema::create('ekspedisi_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ekspedisi_id')->nullable()->constrained('ekspedisis');
            $table->string('status');
            $table->timestamp('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekspedisi_logs');
    }
};
