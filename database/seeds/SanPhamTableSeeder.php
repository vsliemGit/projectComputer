<?php

use Illuminate\Database\Seeder;

class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $faker    = Faker\Factory::create('vi_VN');
        $name = array('Lenovo ThinkPad X270','LG Gram 15','HP Spectre x360','Apple MacBook Air 13 inch 2017','Apple MacBook Pro 13 inch 2017',
                'Lenovo ThinkPad X1 Carbon', 'Dell XPS 13', 'Lenovo ThinkPad T460', 'Dell Latitude 7280', 'Asus X407UA i3 7020U',
            'Asus X407UA i3 7020U');
        for ($i=1; $i <= 32; $i++) {
            $today = new DateTime();
            $stat = 1;
            if ($i % 2 == 0) {
                $stat = 2;
            }
            $gia = $faker->numberBetween($min = 7000000, $max = 30000000);
            array_push($list, [
                'sp_ten'                  => $faker->randomElements($name)[0],
                'sp_giaGoc'               => $gia,
                'sp_giaBan'               => $gia-250000,
                'sp_hinh'                 => $i.".jpg",
                'sp_thongTin'             => "sp_thong tin $i",
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $stat
            ]);
        }
        DB::table('SanPham')->insert($list);
    }
}
