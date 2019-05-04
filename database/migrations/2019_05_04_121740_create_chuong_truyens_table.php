<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuongTruyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtruyens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('maChuong');
            $table->string('tenChuong');
            $table->string('noiDung');
            $table->dateTime('ngayDang');
            $table->string('matruyen');
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
        Schema::dropIfExists('chuongtruyens');
    }
}
