@extends('base')
@section('container')
@section('title', 'Daftar Aset Terpinjam')

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
            <h2 class="float-left"> Daftar Aset Terpinjam </h2>
            <a class="btn btn-primary float-right mt-2" href="/tambahTerpinjam" role="button">Tambah data</a>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
						<th>ID ASET</th>
						<th>NAMA ASET</th>
						<th class="text-center">NAMA PEMINJAM</th>
						<th class="text-center">JUMLAH</th>
						<th class="text-center">TANGGAL PINJAMAN</th>
						<th class="text-center">TANGGAL JATUH TEMPO</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_terpinjam as $at)
                    <tr>
						<td>{{ $at->id_aset }}</td>
						<td>{{ $at->nama_aset }}</td>
						<td class="text-center">{{ $at->nama_peminjam }}</td>
						<td class="text-center">{{ $at->jumlah_pinjaman }}</td>
						<td class="text-center">{{ $at->tanggal_pinjaman }}</td>
						<td class="text-center">{{ $at->tanggal_jatuh_tempo }}</td>
						<td>
							<a href="/AsetTerpinjam/edit/{{$at->id_aset}}" class="badge badge-warning">Edit</a>
							<a href="/AsetTerpinjam/hapus/{{$at->id_aset}}" class="badge badge-danger">Hapus</a>
						</td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection