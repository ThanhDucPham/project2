<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhoms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenNhom');
            $table->dateTime('ngayLap');
            $table->string('gioiThieu');
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
        Schema::dropIfExists('nhoms');
    }
}
