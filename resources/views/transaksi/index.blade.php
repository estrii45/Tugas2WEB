@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Jenis Transaksi
                <a href="{{route('tambah.transaksi')}}" class="btn btn-md btn-success float-right">TAMBAH DATA</a>
                </div>

                <div class="card-body">
                   <diiv class="table-responsive">
                   <table class="table table-bordered">
                   <tr>
                        <th>id_transaksi</th>
                        <th>nama</th>
                        <th>harga</th>
                        <th>jumlah</th>
                        <th>AKSI</th>
                    </tr>
                        @foreach ($transaksi as $b)
                        <tr>
                            <td>{{ $b->id_transaksi}}</td>
                            <td><?php echo $b->nama ?></td>
                            <td>{{$b->harga}}</td>
                            <td>{{$b->jumlah}}</td>
                            <td>
                                <a href="{{route('edit.transaksi', $b->id_transaksi) }}" class="btn btn-md btn-primary">EDIT</a>
                                <a href="{{route('hapus.transaksi', $b->id_transaksi) }}" class="btn btn-md btn-primary">HAPUS</a>
                            </td> 

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
