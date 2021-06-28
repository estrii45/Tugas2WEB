<?php

namespace App\Http\Controllers;

use App\transaksi;
use Illuminate\Http\Request;
Use Alert;



class transaksiController extends Controller
{
    public function index()
    {
      $transaksi = transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    public function creat()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        transaksi::create($request->all());
        alert('sukses','simpan data berhasil', 'success');
        return redirect()->route('transaksi');
    }

    public function edit(request $request, $id )
    {
        $transaksi = transaksi::where('id_transaksi', $id)->first();
        return view('transaksi.edit', compact ('transaksi'));
    }

    public function update(Request $request,$id)
    {
        $transaksi = transaksi::where('id_transaksi', $id)->update([
            'id_transaksi' => $request->id_transaksi,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);
        alert('sukses','data berhasil disimpan', 'success');
        return redirect()->route('transaksi');
        
    }

   public function destroy(Request $request, $id)
   {
       $transaksi = transaksi::where('id_transaksi', $id)->delete();
       alert('Sukses','hapus data berhasil', 'success');
       return redirect()->route('transaksi');
   }
}
