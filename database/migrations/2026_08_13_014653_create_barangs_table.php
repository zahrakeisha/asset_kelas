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
            $table->unsignedBigInteger('ruangan_id');
            $table->unsignedBigInteger('masa_ekonomis_id');

            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('merek')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();

            $table->integer('jumlah')->default(1);

            $table->enum('kondisi', [
                'Baik',
                'Rusak Ringan',
                'Rusak Berat'
            ]);

            $table->date('tanggal_perolehan')->nullable();

            $table->text('keterangan')->nullable();

            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('kategoris')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('ruangan_id')
                ->references('ruangan_id')
                ->on('ruangans')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('masa_ekonomis_id')
                ->references('masa_ekonomis_id')
                ->on('masa_ekonomis')
                ->onUpdate('cascade')
                ->onDelete('restrict');

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
