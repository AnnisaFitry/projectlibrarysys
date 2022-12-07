<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemberitahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.notif');
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
        $pinjam = DB::table('peminjaman')
        ->select('pemberitahuan.isi','buku.judul_buku')
        ->join('buku', 'buku.id', '=', 'peminjaman.id_buku')
        ->join('pemberitahuan', 'pemberitahuan.id', '=', 'peminjaman.id_pemberitahuan')
        ->join('pengembalian', 'pengembalian.id_pinjam', '=', 'peminjaman.id')
        ->join('detail_user', 'detail_user.id', '=', 'peminjaman.id_anggota')
        ->join('users', 'detail_user.id_users', '=', 'users.id')
        ->where('users.id', '=', $id)
        ->where('peminjaman.status_pinjam', '=', 1)
        ->get();

        return view('users.notif', [
            'pinjam' => $pinjam, 
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
