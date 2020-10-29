<?php

namespace App\Http\Controllers;

use App\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antrians = DB::table('t_antrian')->paginate(5);
        return view('antrian.index', ['antrians' => $antrians]);
        // return view('antrian.index');
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
        return view('antrian.create');
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
            'nama_pasien' => 'required',
            'poli' => 'required'
        ]);

        $antrian = new Antrian;
        $antrian->nama = $request->nama_pasien;
        $antrian->poliklinik = $request->poli;

        $antrian->updated_by = $request->updated_by;
        $antrian->created_by = $request->created_by;
        $antrian->save();

        return redirect('/antrian')->with('status', 'Data Antrian berhasil ditambahkan!');
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
    public function edit(Antrian $antrian)
    {

        return view('antrian.edit', compact('antrian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antrian $antrian)
    {
        //validasi
        $request->validate([
            'nama_pasien' => 'required',
            'poli' => 'required'

        ]);

        Antrian::where('id', $antrian->id)
            ->update([
                'nama' => $request->nama_pasien,
                'poliklinik' => $request->poli,
                'updated_by' => $request->updated_by

            ]);

        return redirect('/antrian')->with('status', 'Data Antrian berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antrian $antrian)
    {
        //return $asuransi;
        Antrian::destroy($antrian->id);
        return redirect('/antrian')->with('status', 'Data Antrian berhasil dihapus!');
    }
}
