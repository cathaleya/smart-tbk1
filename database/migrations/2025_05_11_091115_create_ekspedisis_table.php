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
        Schema::create('ekspedisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transport_id')->nullable()->constrained('transports');
            $table->foreignId('ekspedisi_status_id')->constrained('ekspedisi_statuses');
            $table->string('no_hp_supir')->nullable();
            $table->string('lokasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekspedisis');
    }
};
