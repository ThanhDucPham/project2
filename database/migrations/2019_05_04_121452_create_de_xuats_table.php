<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeXuatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dexuats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('maDX');
            $table->string('noiDung');
            $table->dateTime('ngayGui');
            $table->boolean('trangThai');
            $table->string('maNhom');
            $table->string('maTK');
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
        Schema::dropIfExists('dexuats');
    }
}
