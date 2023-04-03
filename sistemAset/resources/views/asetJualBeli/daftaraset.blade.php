@extends('base')
@section('container')
@section('title', 'Daftar Aset Jual Beli')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="my-4 col-12">
            <h2 class="float-left"> Daftar Aset Jual Beli </h2>
            <a class="btn btn-primary float-right mt-2" href="/tambahAsetJualBeli" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
						<th class="text-center">ID ASET</th>
						<th class="text-center">NAMA ASET</th>
						<th class="text-center">STOK</th>
						<th class="text-center">NILAI EKONOMI</th>
						<th class="text-center">LOKASI JUAL</th>
						<th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_jualbeli as $aj)
                    <tr>
						<td class="text-center">{{ $aj->id_aset }}</td>
						<td class="text-center">{{ $aj->nama_aset }}</td>
						<td class="text-center">{{ $aj->stok }}</td>
						<td class="text-center">{{ $aj->nilai_ekonomi }}</td>
						<td class="text-center">{{ $aj->lokasi_jual }}</td>
						<td>
							<a href="/aset_jual_beli/edit/{{$aj->id_aset}}" class="badge badge-warning">Edit</a>
							<a href="/aset_jual_beli/hapus/{{$aj->id_aset}}" class="badge badge-danger">Hapus</a>
						</td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection