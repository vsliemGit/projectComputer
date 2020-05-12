<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhAnhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HinhAnh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedTinyInteger('ha_stt')->default('1')->comment('Số thứ tự # Số thứ tự hình ảnh của mỗi sản phẩm');
            $table->string('ha_ten', 150)->comment('Tên hình ảnh # Tên hình ảnh (không bao gồm đường dẫn)');
            
            $table->primary(['sp_ma', 'ha_stt']);
            $table->foreign('sp_ma')->references('sp_ma')->on('SanPham')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `HinhAnh` comment 'Hình ảnh sản phẩm # Các hình ảnh chi tiết của sản phẩm'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HinhAnh');
    }
}
