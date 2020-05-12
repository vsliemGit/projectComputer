<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{
    const     CREATED_AT    = 'q_taoMoi';
    const     UPDATED_AT    = 'q_capNhat';

    protected $table        = 'quyen';
    protected $fillable     = ['q_ten', 'q_dienGiai', 'q_taoMoi', 'q_capNhat', 'q_trangThai'];
    protected $guarded      = ['q_ma'];

    protected $primaryKey   = 'q_ma';

    protected $dates        = ['q_taoMoi', 'q_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function nhanViens()
    {
        return $this->hasMany('App\NhanVien', 'q_ma', 'q_ma');
    }
}
