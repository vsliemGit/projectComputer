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
                'ctsp_loaiCPU'           => "Intel Core i3",
                'ctsp_tocDoCPU'          => 2.2,
                'ctsp_loaiRAM'           => "DDR4 (2 khe)",
                'ctsp_dungLuongRAM'      => 4,
                'ctsp_loaiROM'           => "SSD 256GB",
                'ctsp_dungLuongROM'      => "256 GB",
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
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'         => 1.6,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'ctsp_hang'              => "Asus",
                'ctsp_loaiCPU'           => "Intel Core i3",
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
            ],
            [
                'sp_ma'                  => 6,
                'ctsp_ma'                => 6,
                'ctsp_hang'              => "Lenovo",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.6,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
                'ctsp_kichThuocMonitor'  => 15.6,
                'ctsp_doPhanGiaiMonitor' => "1920 x 1080",
                'ctsp_cardDoHoa'         => "Intel® UHD Graphics 620",
                'ctsp_congKetNoi'        => "2 x USB 2.0, USB 3.1, HDMI, USB Type-C",
                'ctsp_pin'               => "Li-Ion 2 cell",
                'ctsp_HDH'               => "Windows 10 Pro",
                'ctsp_kichThuoc'         => "Dài 304.1 mm -Rộng 212.1 mm -Dày 4.1 đến 15.6 mm",
                'ctsp_trongLuong'        => 2.0,
                'ctsp_taoMoi'            => $today->format('Y-m-d H:i:s'),
                'ctsp_capNhat'           => $today->format('Y-m-d H:i:s')
            ],
            [
                'sp_ma'                  => 7,
                'ctsp_ma'                => 7,
                'ctsp_hang'              => "Dell",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "SSD",
                'ctsp_dungLuongROM'      => "256 GB",
                'ctsp_kichThuocMonitor'  => 15,
                'ctsp_doPhanGiaiMonitor' => "1920 x 1080",
                'ctsp_cardDoHoa'         => "Intel® UHD Graphics 620",
                'ctsp_congKetNoi'        => "2 x USB 2.0, USB 3.1, HDMI, USB Type-C",
                'ctsp_pin'               => "Li-Ion 2 cell",
                'ctsp_HDH'               => "Windows 10 Pro",
                'ctsp_kichThuoc'         => "Dài 304.1 mm -Rộng 212.1 mm -Dày 4.1 đến 15.6 mm",
                'ctsp_trongLuong'        => 2.1,
                'ctsp_taoMoi'            => $today->format('Y-m-d H:i:s'),
                'ctsp_capNhat'           => $today->format('Y-m-d H:i:s')
            ],
            [
                'sp_ma'                  => 8,
                'ctsp_ma'                => 8,
                'ctsp_hang'              => "Lenovo",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 9,
                'ctsp_ma'                => 9,
                'ctsp_hang'              => "Acer",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 10,
                'ctsp_ma'                => 10,
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 11,
                'ctsp_ma'                => 11,
                'ctsp_hang'              => "Lenovo",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 12,
                'ctsp_ma'                => 12,
                'ctsp_hang'              => "Asus",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 13,
                'ctsp_ma'                => 13,
                'ctsp_hang'              => "Dell",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 14,
                'ctsp_ma'                => 14,
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 15,
                'ctsp_ma'                => 15,
                'ctsp_hang'              => "Lenovo",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 16,
                'ctsp_ma'                => 16,
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 17,
                'ctsp_ma'                => 17,
                'ctsp_hang'              => "Acer",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 18,
                'ctsp_ma'                => 18,
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 19,
                'ctsp_ma'                => 19,
                'ctsp_hang'              => "Macbook",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 20,
                'ctsp_ma'                => 20,
                'ctsp_hang'              => "Macbook",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 21,
                'ctsp_ma'                => 21,
                'ctsp_hang'              => "Macbook",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 22,
                'ctsp_ma'                => 22,
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 23,
                'ctsp_ma'                => 23,
                'ctsp_hang'              => "Lenovo",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 24,
                'ctsp_ma'                => 24,
                'ctsp_hang'              => "Asus",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 25,
                'ctsp_ma'                => 25,
                'ctsp_hang'              => "Dell",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 26,
                'ctsp_ma'                => 26,
                'ctsp_hang'              => "Acer",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 27,
                'ctsp_ma'                => 27,
                'ctsp_hang'              => "Acer",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 28,
                'ctsp_ma'                => 28,
                'ctsp_hang'              => "Lenovo",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 29,
                'ctsp_ma'                => 29,
                'ctsp_hang'              => "HP",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 30,
                'ctsp_ma'                => 30,
                'ctsp_hang'              => "MSI",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 31,
                'ctsp_ma'                => 31,
                'ctsp_hang'              => "Fujitsu",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
                'sp_ma'                  => 32,
                'ctsp_ma'                => 32,
                'ctsp_hang'              => "Macbook",
                'ctsp_loaiCPU'           => "8265U",
                'ctsp_tocDoCPU'          => 1.9,
                'ctsp_loaiRAM'           => "DDR4 (1 khe)",
                'ctsp_dungLuongRAM'      => 12,
                'ctsp_loaiROM'           => "HDD",
                'ctsp_dungLuongROM'      => "500 GB",
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
