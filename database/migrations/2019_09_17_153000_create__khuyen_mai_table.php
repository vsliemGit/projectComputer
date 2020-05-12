<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenMaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhuyenMai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('km_ma')->comment('Mã chương trình khuyến mãi');
            $table->string('km_ten', 191)->comment('Tên chương trình # Tên chương trình khuyến mãi');
            $table->text('km_noiDung')->comment('Thông tin chi tiết # Nội dung chi tiết chương trình khuyến mãi');
            $table->dateTime('km_batDau')->comment('Thời điểm bắt đầu # Thời điểm bắt đầu khuyến mãi');
            $table->dateTime('km_ketThuc')->nullable()->default(NULL)->comment('Thời điểm kết thúc # Thời điểm kết thúc khuyến mãi');
            $table->string('km_giaTri', 50)->default('100;100')->comment('Giá trị khuyến mãi # Giá trị khuyến mãi trên tổng hóa đơn (giảm tiền/giảm % tiền, giảm % vận chuyển), định dạng: tien;VanChuyen');
            $table->unsignedSmallInteger('nv_nguoiLap')->comment('Lập kế hoạch # nv_ma # nv_hoTen # Mã nhân viên (người lập chương trình khuyến mãi)');
            $table->dateTime('km_ngayLap')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm lập # Thời điểm lập kế hoạch khuyến mãi');
            $table->unsignedSmallInteger('nv_kyDuyet')->default('1')->comment('Duyệt kế hoạch # nv_ma # nv_hoTen # Mã nhân viên (thủ kho/giám đốc), 1-chưa phân công');
            $table->dateTime('km_ngayDuyet')->nullable()->default(NULL)->comment('Thời điểm duyệt # Ngày duyệt chương trình khuyến mãi');
            $table->timestamp('km_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chương trình khuyến mãi');
            $table->timestamp('km_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chương trình khuyến mãi gần nhất');
            $table->unsignedTinyInteger('km_trangThai')->default('2')->comment('Trạng thái # Trạng thái chương trình khuyến mãi: 1-ngưng khuyến mãi, 2-lập kế hoạch, 3-ký nháy, 4-duyệt kế hoạch');
            
            $table->unique(['km_ten']);
            $table->foreign('nv_kyDuyet')->references('nv_ma')->on('NhanVien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_nguoiLap')->references('nv_ma')->on('NhanVien')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KhuyenMai');
    }
}
