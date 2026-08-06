<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasaEkonomisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masa_ekonomis', function (Blueprint $table) {
            $table->bigIncrements('masa-ekonomis-id');

            $table->unsignedBigInteger('kategori_id');
            $table->integer('lama_ekonomis');
            $table->string('satuan')->default('Tahun');
            $table->text('keterangan')->nullable();

            $table->foreign('kategori_id')->references('kategori-id')
            ->on('kategoris')
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
        Schema::dropIfExists('masa_ekonomis');
    }
}
