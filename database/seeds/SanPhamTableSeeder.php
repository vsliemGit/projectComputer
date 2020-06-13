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
        $name = array('HP 348 G7','HP 15s du1035TX','HP 15s fq1105TU','Asus VivoBook A512FA','Acer Aspire 3 A315','Lenovo IdeaPad S145 15IIL', 'Dell Vostro 3590', 'Lenovo ThinkBook 14IML', 'Acer Nitro AN515', 'HP Pavilon 14 ce2035tu','Lenovo Ideapad S145', 'Asus Gaming ROG Strix G531G', 'Dell Inspiron 3581', 'HP 15s du0042TX', 'Lenovo YOGA S730', 'HP Envy x360 ar0072AU', 'Acer Swift 3 SF314', 'HP EliteBook X360', 'Apple MacBook Air 2017', 'Apple MacBook Air 2020', 'MacBook Pro Touch 16 inch 2019', 'HP Probook 430', 'Lenovo ThinkPad X270', 'Asus X407UA i3 7020U', 'Dell Latitude 7280', 'Acer Nitro AN515 43 R9FD', 'Acer Predator Triton 500 PT515', 'Lenovo Ideapad C340', 'HP 15s du0063TU', 'MSI GE65 Raider 9SE', 'Fujitsu LifeBook U939', 'MacBook Air 13 Retina 2020', 'Dell G3 15 3590');
        for ($i=1; $i <= 32; $i++) {
            $today = new DateTime();
            $stat = 1;
            if ($i % 2 == 0) {
                $stat = 2;
            }
            $gia = $faker->numberBetween($min = 7000000, $max = 30000000);
            array_push($list, [
                'sp_ten'                  => $name[$i-1],
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
