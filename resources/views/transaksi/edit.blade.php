@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DATA TRANSAKSI</div>

                <div class="card-body">
                    <form action="{{ route('update.transaksi', $transaksi->id_transaksi)}}" method="POST">
                    @csrf

                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                    <label form="">id transaksi</label>
                                    <input type="text" value="{{is_null($transaksi)? '' : $transaksi->id_transaksi}}" name="id_transaksi" class="form-control" placeholder="massukan id"></input>
                                </div>
                                <div class="col">
                                    <label form="">Nama Barang</label>
                                    <input type="text" value="{{is_null($transaksi)? '' : $transaksi->nama}}" name="nama" class="form-control" placeholder="massukan nama"></input>
                                </div>
                                <div class="col">
                                    <label form="">Harga Barang</label>
                                    <input type="text" value="{{is_null($transaksi)? '' : $transaksi->harga}}" name="harga" class="form-control" placeholder="massukan harga"></input>
                                </div>
                                <div class="col">
                                    <label form="">Jumlah Barang</label>
                                    <input type="text" value="{{is_null($transaksi)? '' : $transaksi->jumlah}}" name="jumlah" class="form-control" placeholder="massukan jumlah"></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="row float-right">
                                <div class="col">
                                    <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                    <a href="{{ route('transaksi') }}" class="btn btn-sm btn-danger">BATAL</a>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
