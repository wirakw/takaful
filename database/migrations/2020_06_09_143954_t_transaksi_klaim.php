<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TTransaksiKlaim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_transaksi_klaim', function (Blueprint $table) {
            $table->bigInteger('kode_trans_klaim')->primary()
            $table->bigInteger('kode_user')
            $table->foreignId('kode_trans_polis')->constrained()->onDelete('cascade')
            $table->foreignId('no_polis', 50)->constrained()->onDelete('cascade')
            $table->date('tgl_transaksi')
            $table->string('tipe_klaim', 20)
            $table->string('jenis_klaim', 20)
            $table->decimal('nilai_klaim', 13, 2)	
            $table->text('notes');
            $table->date('tgl_kejadian')
            $table->string('no_rek_debitur', 50)
            $table->string('nama_bank', 30)
            $table->string('klasifikasi_klaim', 20)
            $table->char('status_klaim', 1)
            $table->date('entry_date')
            $table->string('entry_by', 50)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_transaksi_klaim');
    }
}
