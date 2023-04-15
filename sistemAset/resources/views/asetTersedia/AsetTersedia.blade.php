@extends('base')
@section('container')
@section('title', 'Aset Tersedia')

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
            <h2 class="float-left"> Daftar Aset Tersedia </h2>
            <a class="btn btn-primary float-right mt-2" href="/tambahTersedia" role="button">Tambah data</a>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
						<th>ID ASET</th>
						<th>NAMA ASET</th>
						<th class="text-center">STOK</th>
                        <th> </th>
                </thead>
                <tbody>
                @foreach($aset_tersedia as $at)
                    <tr>
						<td>{{ $at->id_aset }}</td>
						<td>{{ $at->nama_aset }}</td>
						<td class="text-center">{{ $at->stok }}</td>
						<td>
							<a href="/AsetTersedia/edit/{{$at->id_aset}}" class="badge badge-warning">Edit</a>
							<a href="/AsetTersedia/hapus/{{$at->id_aset}}" class="badge badge-danger">Hapus</a>
						</td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection