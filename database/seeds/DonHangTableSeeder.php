<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class DonHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $uPI = new VnPersonalInfo();
        for($i=1; $i<=5 ; $i++){
            $today = new DateTime();
            array_push($list, [
                'kh_ma' => $i,
                'dh_tongTien' => $i+100,
                'dh_thoiGianDatHang' => $today->format('Y-m-d H:i:s'),
                'dh_diaChi'               => $uPI->Address(),
                'dh_daThanhToan'          => 1,
                'nv_xuLy'                 => $i,
                'dh_ngayXuLy'             => $today->format('Y-m-d H:i:s'),
                'nv_giaoHang'             => $i,
                'dh_ngayLapPhieuGiao'     => $today->format('Y-m-d H:i:s'),
                'dh_ngayGiaoHang'         => $today->format('Y-m-d H:i:s'),
                'dh_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'dh_capNhat'              => $today->format('Y-m-d H:i:s'),
                'dh_trangThai'            => $i,
                'vc_ma'                   => $i,
                'tt_ma'                   => 1
            ]);
        }

        DB::table('donhang')->insert($list);

    }
}
