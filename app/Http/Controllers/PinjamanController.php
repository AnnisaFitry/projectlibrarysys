<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('users.pinjaman');
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
        ->select('peminjaman.status_pinjam','pengembalian.status_kembali','buku.judul_buku', 'buku.img_buku', 'buku.kode_buku', 'buku.jumlah')
        ->join('buku', 'buku.id', '=', 'peminjaman.id_buku')
        ->join('pengembalian', 'pengembalian.id_pinjam', '=', 'peminjaman.id')
        ->join('detail_user', 'detail_user.id', '=', 'peminjaman.id_anggota')
        ->join('users', 'detail_user.id_users', '=', 'users.id')
        ->where('users.id', '=', $id)
        ->where('peminjaman.status_pinjam', '=', 1)
        ->get();

        return view('users.pinjaman', [
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
