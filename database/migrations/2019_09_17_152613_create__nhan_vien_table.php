<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallIncrements('nv_ma')->comment('Mã nhân viên, 1-chưa phân công');
            $table->string('nv_hoTen', 100)->comment('Họ tên # Họ tên');
            $table->string('nv_taiKhoan', 50)->comment('Tài khoản # Tài khoản');
            $table->string('nv_matKhau', 256)->comment('Mật khẩu # Mật khẩu');        
            $table->string('nv_email', 100)->comment('Email # Email');
            $table->string('nv_dienThoai', 11)->comment('Điện thoại # Điện thoại');
            $table->timestamp('nv_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Thời điểm tạo # Thời điểm đầu tiên tạo nhân viên');
            $table->timestamp('nv_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Thời điểm cập nhật # Thời điểm cập nhật nhân viên gần nhất');
            $table->tinyInteger('nv_trangThai')->default('2')
                    ->comment('Trạng thái # Trạng thái nhân viên: 1-khóa, 2-khả dụng');
            
            $table->unsignedTinyInteger('q_ma')
                    ->comment('Quyền # Mã quyền: 1-Giám đốc, 2-Quản trị, 3-Kế toán, 4-Nhân viên giao hàng,...');
            
            $table->unique(['nv_taiKhoan', 'nv_email', 'nv_dienThoai']);
            $table->foreign('q_ma')->references('q_ma')->on('Quyen')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NhanVien');
    }
}
