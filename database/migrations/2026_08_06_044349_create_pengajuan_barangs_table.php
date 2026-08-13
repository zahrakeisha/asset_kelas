<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_barangs', function (Blueprint $table) {
            $table->bigIncrements('pengajuan_id');
            $table->unsignedBigInteger('barang_id');
            $table->date('tanggal_pengajuan');
            $table->enum('jenis_pengajuan', ['Perbaikan', 'Penggantian', 'Penambahan']);
            $table->text('alasan');
            $table->enum('status', ['Menunggu', 'Disetujui', 'Ditolak'])->default('Menunggu');
            $table->text('catatan')->nullable();
            $table->foreign('barang_id')->references('barang_id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pengajuan_barangs');
    }
}
