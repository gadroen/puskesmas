<?php

namespace App\Http\Controllers;

use App\Asuransi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AsuransiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asuransis = DB::table('m_asuransi')->paginate(5);
        return view('asuransi.index', ['asuransis' => $asuransis]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $asuransis = DB::table('m_asuransi')

            ->where('png_jawab', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('asuransi.index', ['asuransis' => $asuransis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asuransi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //-- bayu note : ini contoh insert pertama
        // $asuransi = new Asuransi;
        // $asuransi->kd_pj = $request->kd_pj;
        // $asuransi->png_jawab = $request->png_jawab;
        // $asuransi->nama_perusahaan = $request->nama_perusahaan;
        // $asuransi->alamat_asuransi = $request->alamat_asuransi;
        // $asuransi->no_telp = $request->no_telp;
        // $asuransi->attn = $request->attn;
        // $asuransi->save();


        //-- bayu note : ini contoh insert kedua
        // Asuransi::create([
        //     'kd_pj' => $request->kd_pj,
        //     'png_jawab' => $request->png_jawab,
        //     'nama_perusahaan' => $request->nama_perusahaan,
        //     'alamat_asuransi' => $request->alamat_asuransi,
        //     'no_telp' => $request->no_telp,
        //     'attn' => $request->attn
        // ]);


        //-- bayu note : ini contoh insert ketiga 
        //Asuransi::create($request->all());

        //validasi
        $request->validate([
            'kd_pj' => 'required',
            'png_jawab' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_asuransi' => 'required',
            'no_telp' => 'required',
            'attn' => 'required'
        ]);

        $kode_pj = DB::table('m_asuransi')
            ->select(DB::raw('count(kd_pj) as kd_pj_count'))
            ->where('kd_pj', '=', $request->kd_pj)
            ->get();

        // dump($kode_pj);
        // echo $kode_pj[0]->kd_pj_count;
        // die();

        if ($kode_pj[0]->kd_pj_count == 1) {
            return redirect('/asuransi/create')->with('warning', 'Maaf kode asuransi sudah terdaftar!');
        } else {
            $asuransi = new Asuransi;
            $asuransi->kd_pj = $request->kd_pj;
            $asuransi->png_jawab = $request->png_jawab;
            $asuransi->nama_perusahaan = $request->nama_perusahaan;
            $asuransi->alamat_asuransi = $request->alamat_asuransi;
            $asuransi->no_telp = $request->no_telp;
            $asuransi->attn = $request->attn;
            $asuransi->updated_by = $request->updated_by;
            $asuransi->created_by = $request->created_by;
            $asuransi->save();

            return redirect('/asuransi')->with('status', 'Data Asuransi berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asuransi  $asuransi
     * @return \Illuminate\Http\Response
     */
    public function show(Asuransi $asuransi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asuransi  $asuransi
     * @return \Illuminate\Http\Response
     */
    public function edit(Asuransi $asuransi)
    {

        return view('asuransi.edit', compact('asuransi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asuransi  $asuransi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asuransi $asuransi)
    {
        //validasi
        $request->validate([
            'kd_pj' => 'required',
            'png_jawab' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_asuransi' => 'required',
            'no_telp' => 'required',
            'attn' => 'required'
        ]);

        Asuransi::where('id', $asuransi->id)
            ->update([
                'kd_pj' => $request->kd_pj,
                'png_jawab' => $request->png_jawab,
                'nama_perusahaan' => $request->nama_perusahaan,
                'alamat_asuransi' => $request->alamat_asuransi,
                'no_telp' => $request->no_telp,
                'attn' => $request->attn,
                'no_telp' => $request->no_telp,
                'updated_by' => $request->updated_by

            ]);

        return redirect('/asuransi')->with('status', 'Data Asuransi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asuransi  $asuransi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asuransi $asuransi)
    {
        //return $asuransi;
        Asuransi::destroy($asuransi->id);
        return redirect('/asuransi')->with('status', 'Data Asuransi berhasil dihapus!');
    }
}
