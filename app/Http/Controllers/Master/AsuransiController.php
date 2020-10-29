<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AsuransiController extends Controller
{

    public function index()
    {
        $ass = DB::table('m_asuransi')->paginate(10);
        // dump($ass);
        return view('asuransi.index', ['ass' => $ass]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $ass = DB::table('m_asuransi')
            ->where('png_jawab', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('asuransi.index', ['ass' => $ass]);
    }

    public function create()
    { }
}
