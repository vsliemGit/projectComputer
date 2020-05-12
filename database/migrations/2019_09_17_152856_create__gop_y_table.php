<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GopY', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('gy_ma')->comment('Mã góp ý');
            $table->dateTime('gy_thoiGian')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm góp ý # Thời điểm góp ý');
            $table->text('gy_noiDung')->comment('Góp ý # Nội dung góp ý');
            $table->string('gy_email')->nullable()->comment('Email của khách hàng đã góp ý');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GopY');
    }
}
