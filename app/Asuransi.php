<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asuransi extends Model
{
    protected $table = 'm_asuransi';

    //$fillable = field yang boleh diisi manual
    //$guarded = field yang tidak boleh diisi manual
    protected $fillable = ['kd_pj', 'png_jawab', 'nama_perusahaan', 'alamat_asuransi', 'no_telp', 'attn'];
}
