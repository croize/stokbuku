<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokbukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stokbuku', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('buku_id');
          $table->integer('penerbit_id');
          $table->string('jumlah');
          $table->date('tgl_masuk');
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
        Schema::drop('stokbuku');
    }
}
