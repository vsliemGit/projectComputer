<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietSanPham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ctsp_ma')->comment('Mã chi tiết sản phẩm');
            $table->unsignedBigInteger('sp_ma')->comment('Mã sản phẩm');
            $table->string('ctsp_hang', 30)->comment('Tên hảng sản xuất');
            $table->string('ctsp_loaiCPU', 50)->comment('Loại bộ xử lí của sản phẩm');
            $table->float('ctsp_tocDoCPU', 3, 2)->comment('Tốc độ của bộ xử lí');
            $table->string('ctsp_loaiRAM', 20)->comment('Loại bộ nhớ trong');
            $table->integer('ctsp_dungLuongRAM')->comment("Dung lượng bộ nhớ trong");
            $table->string('ctsp_loaiROM', 10)->comment('Loại ổ cứng của sản phẩm');
            $table->string('ctsp_dungLuongROM', 20)->comment("Dung lượng ổ cứng");
            $table->integer('ctsp_kichThuocMonitor')->comment('Kích cỡ màn hình được tính theo inch');
            $table->string('ctsp_doPhanGiaiMonitor', 50)->comment('Độ phân giải màn hình sản phẩm');
            $table->string('ctsp_cardDoHoa', 30)->comment('Loại card đồ họa của sản phẩm');
            $table->string('ctsp_congKetNoi', 50)->comment('Cac loại cổng kết nối có trên sản phẩm');
            $table->string('ctsp_pin', 20)->comment('Loai pin của sản phẩm');
            $table->string('ctsp_HDH', 20)->comment('Loai hệ đều hành của sản phẩm');
            $table->string('ctsp_kichThuoc', 50)->comment('Kích thước của sản phẩm');
            $table->float('ctsp_trongLuong', 3, 2)->comment('Trọng lượng của sản phẩm');
            $table->timestamp('ctsp_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo sản phẩm');
            $table->timestamp('ctsp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật sản phẩm gần nhất');

            $table->unique('sp_ma');
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
        Schema::dropIfExists('ChiTietSanPham');
    }
}
