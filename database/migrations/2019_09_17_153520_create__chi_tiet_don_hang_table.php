<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietDonHang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('dh_ma')->comment('Đơn hàng # dh_ma # dh_ma # Mã đơn hàng');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedSmallInteger('ctdh_soLuong')->default('1')->comment('Số lượng # Số lượng sản phẩm đặt mua');
            $table->unsignedInteger('ctdh_donGia')->default('1')->comment('Đơn giá # Giá bán');
            $table->unsignedInteger('ctdh_thanhTien')->comment('Thành tiền # Tổng tiền của mặt hàng');
            $table->primary(['dh_ma', 'sp_ma']);
            $table->foreign('dh_ma')->references('dh_ma')->on('DonHang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('SanPham')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChiTietDonHang');
    }
}
