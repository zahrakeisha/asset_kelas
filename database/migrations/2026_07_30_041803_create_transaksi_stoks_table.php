<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_stoks', function (Blueprint $table) {
            $table->bigIncrements('transaksi_stok_id');
            $table->foreignId('barang_id')->constrained('barangs', 'barang_id')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreignId('supplier_id')
                ->nullable()
                ->constrained('suppliers', 'supplier_id')
                ->nullOnDelete();

            $table->date('tanggal');
            $table->enum('jenis', ['Masuk', 'Keluar']);
            $table->integer('jumlah');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_stoks');
    }
}
