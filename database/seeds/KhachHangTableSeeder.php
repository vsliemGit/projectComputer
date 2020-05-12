<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class KhachHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();
        
        $roles     = 6;
        $employees = [1,   1,  1,  1,  2,  2];
       // $ages      = [30, 25, 22, 20, 18, 18];
        $genders   = [VnBase::VnFemale, VnBase::VnMale, VnBase::VnMale, VnBase::VnFemale, VnBase::VnFemale, VnBase::VnFemale];

        $today = new DateTime();

        for ($i=0, $count = 1; $i < $roles; $i++) {
            for ($j=0; $j < $employees[$i]; $j++, $count++) { 
                $gender   = $genders[$i];
                $name     = $uFN->FullName($gender);
                //$age      = $uPI->Age($ages[$i]);
                //$birthYear= $uPI->BirthYearValue($age);
                //$birthdate= $uPI->Birthdate($birthYear);
                $username = $uPI->Username($name, "", "", "", VnBase::VnLowerCase, VnBase::VnTrimShorthand, VnBase::VnTrue);
                $email    = "$username@gmail.com";
                //$password = md5($username."@".$birthYear);
                $phone    = $uPI->Mobile("", VnBase::VnFalse);

                array_push($list, [
                    'kh_ma'        => $count,
                    //'kh_taiKhoan'  => $username,
                    //'kh_matKhau'   => $password,
                    'kh_hoTen'     => $name,
                    //'kh_gioiTinh'  => $gender == VnBase::VnMale,
                    'kh_email'     => $email,
                    //'kh_ngaySinh'  => $birthdate["birthdate"],
                    //'kh_diaChi'    => $address,
                    'kh_dienThoai' => $phone,
                    'kh_taoMoi'    => $today->format('Y-m-d H:i:s'),
                    'kh_capNhat'   => $today->format('Y-m-d H:i:s')
                ]);
            }
        }

        DB::table('khachhang')->insert($list);

    }
}
