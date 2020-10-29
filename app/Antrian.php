<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $table = 't_antrian';

    //$fillable = field yang boleh diisi manual
    //$guarded = field yang tidak boleh diisi manual
    protected $fillable = ['nama', 'poliklinik'];
}
