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
            $table->string('vessel_name');
            $table->string('reference_no');
            $table->timestamp('reference_date');
            $table->string('plant');
            $table->bigInteger('shipment');
            $table->foreignId('transporter_id')->constrained('transporters')->cascadeOnDelete();
            $table->foreignId('type_sj')->constrained('jenis_surat_jalans')->cascadeOnDelete();
            $table->foreignId('type_kend')->constrained('vehicle_types')->cascadeOnDelete();
            $table->foreignId('incot')->constrained('incots')->cascadeOnDelete();
            $table->string('tanggal');
            $table->string('no_container');
            $table->string('sheal');
            $table->string('jam_kedatangan');
            $table->timestamp('truck_in')->nullable();
            $table->timestamp('start_loading')->nullable();
            $table->timestamp('finish_loading')->nullable();
            $table->timestamp('truck_out')->nullable();
            $table->timestamp('eta')->nullable();
            $table->boolean('izin')->default(false);
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
