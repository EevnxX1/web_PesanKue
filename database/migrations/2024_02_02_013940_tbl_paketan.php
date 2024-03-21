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
        Schema::create('tbl_paketan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_antrian');
            $table->date('tgl_pesanan');
            $table->string('nm_cus');
            $table->text('alamat');
            $table->string('nm_produk');
            $table->string('qty');
            $table->double('harga');
            $table->text('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_paketan');
    }
};
