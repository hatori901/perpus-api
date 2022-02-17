<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('books_id')->nullable()->references('id')->on('books')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('anggota_id')->nullable()->references('id')->on('anggotas')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('petugas_id')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
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
        Schema::dropIfExists('peminjamans');
    }
}
