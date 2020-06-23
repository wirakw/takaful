<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TTransaksiPolis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_transaksi_polis', function (Blueprint $table) {
            $table->bigInteger('kode_trans_polis')->primary()
            $table->bigInteger('kode_user')
            $table->bigInteger('kode_siswa')
            $table->bigInteger('kode_komu')
            $table->foreignId('user_id')->constrained()->onDelete('cascade')
            $table->date('tgl_transaksi')
            $table->date('mulai_tgl')
            $table->date('sampai_tgl')
            $table->decimal('nilai_premi', 13, 2)
            $table->string('no_polis', 50)->primary()
            $table->string('file_polis', 50)
            $table->date('expired_polis')
            $table->date('entry_date')
            $table->string('entry_by', 50)
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_transaksi_polis', function($table)
        {
            $table->dropForeign('user_id')
        });
        Schema::dropIfExists('t_transaksi_polis');
    }
}
