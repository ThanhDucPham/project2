<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaoCaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('maBC');
            $table->string('tieuDe');
            $table->string('noiDung');
            $table->dateTime('ngayGui');
            $table->boolean('trangThai');
            $table->string('maTruyen');
            $table->string('maTK1');
            $table->string('maTK2');
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
        Schema::dropIfExists('baocaos');
    }
}
