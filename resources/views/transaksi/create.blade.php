@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH TRANSAKSI</div>

                <div class="card-body">
                    <form action="{{ route('simpan.transaksi')}}" method="POST">
                    @csrf

                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                    <label form="">id transakdi</label>
                                    <input type="text" name="id_transaksi" class="form-control" placeholder="massukan id"></input>
                                </div>
                                <div class="col">
                                    <label form="">Nama Barang</label>
                                    <input type="text" name="nama" class="form-control" placeholder="massukan nama"></input>
                                </div>
                                <div class="col">
                                    <label form="">Harga Barang</label>
                                    <input type="text" name="harga" class="form-control" placeholder="massukan harga"></input>
                                </div>
                                <div class="col">
                                    <label form="">Jumlah Barang</label>
                                    <input type="text" name="jumlah" class="form-control" placeholder="massukan jumlah"></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="row float-right">
                                <div class="col">
                                    <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                    <a href="{{route('transaksi') }}" class="btn btn-sm btn-danger">BATAL</a>
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
