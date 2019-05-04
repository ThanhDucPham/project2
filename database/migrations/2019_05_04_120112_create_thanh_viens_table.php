<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhviens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hoTen');
            $table->string('maThanhVien');
            $table->string('gioiTinh');
            $table->string('sdt');
            $table->string('maTK');
            $table->string('maNhom');
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
        Schema::dropIfExists('thanhviens');
    }
}
