<?php

use Illuminate\Database\Seeder;

class ChiTietSanPhamTableSeeder extends Seeder
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
                'sp_ma'                  => 1,
                'ctsp_ma'                => 1,
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8145U",
                'ctsp_tocDoCPU'          => 2.1,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 16,
                'ctsp_loaiROM'           => "SATA3",
                'ctsp_dungLuongROM'      => "4 GB",
                'ctsp_kichThuocMonitor'  => 14,
                'ctsp_doPhanGiaiMonitor' => "1920 x 1080",
                'ctsp_cardDoHoa'         => "Intel® UHD Graphics 620",
                'ctsp_congKetNoi'        => "2 x USB 3.0, HDMI, LAN (RJ45), USB Type-C",
                'ctsp_pin'               => "Li-Ion 3 cell",
                'ctsp_HDH'               => "Windows 10 Home SL",
                'ctsp_kichThuoc'         => "Dài 304.1 mm - Rộng 212.1 mm - Dày 4.1 đến 15.6 mm",
                'ctsp_trongLuong'        => 1.53,
                'ctsp_taoMoi'            => $today->format('Y-m-d H:i:s'),
                'ctsp_capNhat'           => $today->format('Y-m-d H:i:s')
            ], 
            [
                'sp_ma'                  => 2,
                'ctsp_ma'                => 2,
                'ctsp_hang'              => "Asus",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'         => 1.6,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "SATA3",
                'ctsp_dungLuongROM'      => "4 GB",
                'ctsp_kichThuocMonitor'  => 15,
                'ctsp_doPhanGiaiMonitor' => "1920 x 1080",
                'ctsp_cardDoHoa'         => "Intel® UHD Graphics 620",
                'ctsp_congKetNoi'        => "2 x USB 2.0, USB 3.1, HDMI, USB Type-C",
                'ctsp_pin'               => "Li-Ion 2 cell",
                'ctsp_HDH'               => "Windows 10 Pro",
                'ctsp_kichThuoc'         => "Dài 304.1 mm -Rộng 212.1 mm -Dày 4.1 đến 15.6 mm",
                'ctsp_trongLuong'        => 1.6,
                'ctsp_taoMoi'            => $today->format('Y-m-d H:i:s'),
                'ctsp_capNhat'           => $today->format('Y-m-d H:i:s')
            ],
            [
                'sp_ma'                  => 3,
                'ctsp_ma'                => 3,
                'ctsp_hang'              => "DELL",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.6,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "SATA3",
                'ctsp_dungLuongROM'      => "4 GB",
                'ctsp_kichThuocMonitor'  => 15,
                'ctsp_doPhanGiaiMonitor' => "1920 x 1080",
                'ctsp_cardDoHoa'         => "Intel® UHD Graphics 620",
                'ctsp_congKetNoi'        => "2 x USB 2.0, USB 3.1, HDMI, USB Type-C",
                'ctsp_pin'               => "Li-Ion 2 cell",
                'ctsp_HDH'               => "Windows 10 Pro",
                'ctsp_kichThuoc'         => "Dài 304.1 mm -Rộng 212.1 mm -Dày 4.1 đến 15.6 mm",
                'ctsp_trongLuong'        => 1.6,
                'ctsp_taoMoi'            => $today->format('Y-m-d H:i:s'),
                'ctsp_capNhat'           => $today->format('Y-m-d H:i:s')
            ],
            [
                'sp_ma'                  => 4,
                'ctsp_ma'                => 4,
                'ctsp_hang'              => "Macbook",
                'ctsp_loaiCPU'           => "Intel Core i5 Coffee Lake",
                'ctsp_tocDoCPU'          => 1.6,
                'ctsp_loaiRAM'           => "DDR4",
                'ctsp_dungLuongRAM'      => 8,
                'ctsp_loaiROM'           => "SSD",
                'ctsp_dungLuongROM'      => "SSD: 128 GB",
                'ctsp_kichThuocMonitor'  => 13.3,
                'ctsp_doPhanGiaiMonitor' => "Retina (2560 x 1600)",
                'ctsp_cardDoHoa'         => "Intel UHD Graphics 617",
                'ctsp_congKetNoi'        => "2 x Thunderbolt 3 (USB-C)",
                'ctsp_pin'               => "Pin liền",
                'ctsp_HDH'               => "Mac OS",
                'ctsp_kichThuoc'         => "Dài 304.1 mm -Rộng 212.1 mm -Dày 4.1 đến 15.6 mm",
                'ctsp_trongLuong'        => 1.25,
                'ctsp_taoMoi'            => $today->format('Y-m-d H:i:s'),
                'ctsp_capNhat'           => $today->format('Y-m-d H:i:s')
            ],
            [
                'sp_ma'                  => 5,
                'ctsp_ma'                => 5,
                'ctsp_hang'              => "Acer",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.6,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "SATA3",
                'ctsp_dungLuongROM'      => "4 GB",
                'ctsp_kichThuocMonitor'  => 15,
                'ctsp_doPhanGiaiMonitor' => "1920 x 1080",
                'ctsp_cardDoHoa'         => "Intel® UHD Graphics 620",
                'ctsp_congKetNoi'        => "2 x USB 2.0, USB 3.1, HDMI, USB Type-C",
                'ctsp_pin'               => "Li-Ion 2 cell",
                'ctsp_HDH'               => "Windows 10 Pro",
                'ctsp_kichThuoc'         => "Dài 304.1 mm -Rộng 212.1 mm -Dày 4.1 đến 15.6 mm",
                'ctsp_trongLuong'        => 1.6,
                'ctsp_taoMoi'            => $today->format('Y-m-d H:i:s'),
                'ctsp_capNhat'           => $today->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('ChiTietSanPham')->insert($list);
    }
}
