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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_no');
       
            $table->foreignId('transporter_id')->constrained('transporters')->cascadeOnDelete();
            $table->foreignId('type_sj')->constrained('jenis_surat_jalans')->cascadeOnDelete();
            $table->foreignId('type_kend')->constrained('vehicle_types')->cascadeOnDelete();
            $table->foreignId('incot')->constrained('incots')->cascadeOnDelete();
            $table->string('tanggal');
            $table->string('no_container');
            $table->string('sheal');
            $table->string('jam_kedatangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
