@extends('base')
@section('container')
@section('title', 'Daftar Aset')

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
            <h2 class="float-left"> Daftar Aset Pengalihan </h2>
            <a class="btn btn-primary float-right mt-2" href="/tambahAsetPengalihan" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
						<th class="text-center">ID ASET</th>
						<th class="text-center">NAMA ASET</th>
						<th class="text-center">JENIS PENGALIHAN</th>
						<th class="text-center">JUMLAH</th>
						<th class="text-center">LOKASI PENGALIHAN</th>
						<th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_pengalihan as $ap)
                    <tr>
						<td class="text-center">{{ $ap->id_Aset }}</td>
						<td class="text-center">{{ $ap->nama_Aset }}</td>
						<td class="text-center">{{ $ap->jenis_Pengalihan }}</td>
						<td class="text-center">{{ $ap->jumlah }}</td>
						<td class="text-center">{{ $ap->lokasi_Pengalihan }}</td>
						<td>
							<a href="/AsetPengalihan/edit/{{$ap->id_Aset}}" class="badge badge-warning">Edit</a>
							<a href="/AsetPengalihan/hapus/{{$ap->id_Aset}}" class="badge badge-danger">Hapus</a>
						</td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection