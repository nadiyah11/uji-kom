<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tran_keluars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                  ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')
                  ->on('barangs')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('jumlahk');
            $table->integer('totalk')->nullable();
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
        Schema::dropIfExists('tran_keluars');
    }
}
