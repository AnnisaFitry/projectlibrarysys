<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kota = DB::table('kota')->get();
        $perpus = DB::table('detail_perpus');
        $perpus = $perpus
        ->select('detail_perpus.*', 'kota.nama_kota')
        ->join('kota', 'detail_perpus.id_kota', '=', 'kota.id')
        ->get();
        return view('cari-perpus', [
            'perpus' => $perpus,
            'kota' => $kota,
        ]);
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $perpus = DB::table('detail_perpus');
        $kota = DB::table('kota')->get();
        if($keyword != null){
            $perpus = $perpus->where('detail_perpus.nama_perpus', 'like', '%' . $keyword . '%');
        }
        $perpus = $perpus
        ->select('detail_perpus.*', 'kota.nama_kota')
        ->join('kota', 'detail_perpus.id_kota', '=', 'kota.id')
        ->get();         
        return view('cari-perpus', [
            'perpus' => $perpus,
            'kota' => $kota,
        ]);
    }
    public function perkota(Request $request)
    {
        $keyword = $request->cari;
        $kota = DB::table('kota')->get();
        $perpus = DB::table('detail_perpus')
        ->select('detail_perpus.*', 'kota.nama_kota')
        ->join('kota', 'detail_perpus.id_kota', '=', 'kota.id')
        ->where('kota.nama_kota', '=', $keyword)
        ->get();         
        return view('cari-perpus', [
            'perpus' => $perpus,
            'kota' => $kota,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count_user = DB::table('follow')->where('follow.id_perpus','=',$id)->count();
        $count_buku = DB::table('buku')->where('buku.id_perpus','=',$id)->count();
        $perpus = DB::table('detail_perpus')
        ->select('detail_perpus.*', 'kota.nama_kota')
        ->join('kota', 'detail_perpus.id_kota', '=', 'kota.id')
        ->where('detail_perpus.id', '=', $id)
        ->get()
        ->first();
        $kategori = DB::table('kategori')->get();
        $buku = DB::table('buku')
        ->select('buku.*','kategori.nama_kategori')
        ->join('kategori', 'buku.id_kategori', '=', 'kategori.id')
        ->where('buku.id_perpus', '=', $id)
        ->get();

        return view('perpus', [
            'perpus' => $perpus,
            'jum_user' => $count_user, 
            'jum_buku' => $count_buku,
            'buku' => $buku,
            'kategori' => $kategori,
        ]);
    }

    public function caribuku(Request $request, $id)
    {
        $count_user = DB::table('follow')->where('follow.id_perpus','=',$id)->count();
        $count_buku = DB::table('buku')->where('buku.id_perpus','=',$id)->count();
        $perpus = DB::table('detail_perpus')
        ->select('detail_perpus.*', 'kota.nama_kota')
        ->join('kota', 'detail_perpus.id_kota', '=', 'kota.id')
        ->where('detail_perpus.id', '=', $id)
        ->get()
        ->first();
        $keyword = $request->caribuku;
        $kategori = DB::table('kategori')->get();
        $buku = DB::table('buku')
        ->select('buku.*','kategori.nama_kategori')
        ->join('kategori', 'buku.id_kategori', '=', 'kategori.id')
        ->join('detail_perpus', 'buku.id_perpus', '=', 'detail_perpus.id')
        ->where('buku.judul_buku', 'like', '%' . $keyword . '%')
        ->Where('buku.id_perpus', '=', $id)
        ->get(); 
           
        return view('perpus', [
            'buku' => $buku,
            'kategori' => $kategori,
            'perpus' => $perpus,
            'jum_user' => $count_user, 
            'jum_buku' => $count_buku,
        ]);
    }
    public function perkategori(Request $request, $id)
    {
        $count_user = DB::table('follow')->where('follow.id_perpus','=',$id)->count();
        $count_buku = DB::table('buku')->where('buku.id_perpus','=',$id)->count();
        $perpus = DB::table('detail_perpus')
        ->select('detail_perpus.*', 'kota.nama_kota')
        ->join('kota', 'detail_perpus.id_kota', '=', 'kota.id')
        ->where('detail_perpus.id', '=', $id)
        ->get()
        ->first();
        $keyword = $request->carikat;
        $kategori = DB::table('kategori')->get();
        $buku = DB::table('buku')
        ->select('buku.*','kategori.nama_kategori')
        ->join('kategori', 'buku.id_kategori', '=', 'kategori.id')
        ->join('detail_perpus', 'buku.id_perpus', '=', 'detail_perpus.id')
        ->where('buku.id_perpus', '=', $id)
        ->Where('kategori.nama_kategori', '=', $keyword)
        ->get();        
        return view('perpus', [
            'buku' => $buku,
            'kategori' => $kategori,
            'perpus' => $perpus,
            'jum_user' => $count_user, 
            'jum_buku' => $count_buku,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
