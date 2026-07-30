<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('barang_id');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('kategoris')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('merek')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            $table->integer('jumlah')->default(0);
            $table->string('satuan')->default('unit');
            $table->decimal('harga_perolehan', 15, 2)->nullable();
            $table->date('tanggal_perolehan')->nullable();
            $table->integer('masa_ekonomis')->nullable();

            $table->enum('kondisi', ['Baik', 'Rusak Ringan', 'Rusak Berat'])->default('Baik');
            $table->string('lokasi')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
