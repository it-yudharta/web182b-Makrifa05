<?php

namespace App\Http\Controllers;

use App\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pesan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view ('pesan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new pembeli;
        $tambah ->nama = $request['nama'];
        $tambah ->alamat = $request['alamat'];
        $tambah ->pesanan = $request['pesanan'];
        $tambah ->no_Tlp = $request['no_Tlp'];
        $tambah ->save();

        return redirect ('/warung/tampilkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(Pembeli $pembeli)
    {
        $item = Pembeli::paginate(10);

        return view ('pesan.show', ['pembelis' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Pembeli::find($id);
        return view ('pesan.edit',['pembelis' =>$edit]);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $tambah = Pembeli::find($id);
        $tambah ->nama = $request['nama'];
        $tambah ->alamat = $request['alamat'];
        $tambah ->pesanan = $request['pesanan'];
        $tambah ->no_Tlp = $request['no_Tlp'];
        $tambah ->update();

        return redirect ('/warung/tampilkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembeli::find($id)->delete($id);

        return redirect()->back();
    }
}
