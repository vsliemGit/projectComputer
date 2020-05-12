<?php

use Illuminate\Database\Seeder;

class ThanhToanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime();

        $list = [
            [
                'tt_ma'       => 1,
                'tt_ten'      => "Tiền mặt",
                'tt_dienGiai' => "Quý khách thanh toán trực tiếp tại cửa hàng",
                'tt_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'tt_capNhat'  => $today->format('Y-m-d H:i:s')
            ], 
            [
                'tt_ma'       => 2,
                'tt_ten'      => "Thanh toán khi nhận hàng",
                'tt_dienGiai' => "Nhân viên của chúng tôi sẽ liên lạc với Quý khách để nhận thông tin về địa chỉ và thời gian giao hàng. Nhân viên của chúng tôi sẽ đến giao hàng và nhận tiền sau khi Quý khách đã nhận và kiểm tra hàng.",
                'tt_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'tt_capNhat'  => $today->format('Y-m-d H:i:s')
            ]
        ];
        DB::table('ThanhToan')->insert($list);
    }
}
