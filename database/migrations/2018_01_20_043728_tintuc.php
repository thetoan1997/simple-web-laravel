<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tintuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('Link');
            $table->string('TomTat');
            $table->string('NoiDung');
            $table->string('Imagee');
            $table->integer('NoiBat');
            $table->integer('SoLuotXem');
            $table->integer('idLoaiTin');
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
        Schema::dropIfExists('tintuc');        
    }
}
