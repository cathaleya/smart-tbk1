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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->timestamp('rdd');
            $table->bigInteger('no_do');
            $table->bigInteger('no_so');
            $table->bigInteger('no_po');
            $table->bigInteger('ref_doc');
            $table->string('pelanggan');
            $table->bigInteger('customer_no');
            $table->string('address');

            $table->foreignId('kode_material')->constrained('materials')->cascadeOnDelete();
            $table->bigInteger('qty');
            $table->foreignId('su')->constrained('item_units')->cascadeOnDelete();
            $table->foreignId('sloc')->constrained('slocs')->cascadeOnDelete();
            $table->foreignId('transport_id')->nullable()->constrained('transports');
            $table->string('kode_negara');
            $table->string('kota');
            $table->string('no_count')->nullable();
            $table->foreignId('type_customer')->constrained('customer_types')->cascadeOnDelete();
            $table->bigInteger('berat_kg');
            $table->bigInteger('tt_kg');
            $table->bigInteger('tonase');
            $table->enum('jenis_transaksi', ['lokal', 'ekspor']);
            $table->timestamp('tanggal_transaksi_dibuat');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
