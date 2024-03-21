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
        Schema::create('tbl_produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_kue');
            $table->string('nm_kue');
            $table->double('harga');
            $table->string('rasa');
            $table->text('ukuran');
            $table->text('ket');
            $table->text('gambar1');
            $table->text('gambar2');
            $table->text('gambar3');
            $table->text('gambar4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_produk');
    }
};
