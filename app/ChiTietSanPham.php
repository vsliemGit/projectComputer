<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    const     CREATED_AT    = 'ctsp_taoMoi';
    const     UPDATED_AT    = 'ctsp_capNhat';

    protected $table        = 'chitietsanpham';
    protected $primaryKey   = 'ctsp_ma';
    public    $incrementing = false;

    protected $guarded      = ['sp_ma', 'ctsp_ma'];
    protected $fillable     = ['ctsp_hang', 'ctsp_loaiCPU', 'ctsp_tocDoCPU',
                                'ctsp_loaiRAM', 'ctsp_dungLuongRAM', 'ctsp_loaiROM',
                                'ctsp_dungLuongROM', 'ctsp_kichThuocMonitor',
                                'ctsp_doPhanGiaiMonitor', 'ctsp_cardDoHoa',
                                'ctsp_congKetNoi', 'ctsp_pin', 'ctsp_HDH', 
                                'ctsp_kichThuoc', 'ctsp_trongLuong'];

    public function sanPhams()
    {
        return $this->hasMany('App\SanPham', 'sp_ma', 'sp_ma');
    }

}
