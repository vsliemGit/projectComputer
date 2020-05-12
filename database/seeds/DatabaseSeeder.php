<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(VanChuyenTableSeeder::class);
        $this->call(ThanhToanTableSeeder::class);
        $this->call(QuyenTableSeeder::class);
        $this->call(SanPhamTableSeeder::class);
        $this->call(NhanVienTableSeeder::class);
        $this->call(KhachHangTableSeeder::class);
        $this->call(DonHangTableSeeder::class);
        $this->call(ChiTietSanPhamTableSeeder::class);
    }
}
