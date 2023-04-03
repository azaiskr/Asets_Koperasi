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
            <h2 class="float-left"> Daftar Aset Tetap </h2>
            <a class="btn btn-primary float-right mt-2" href="/tambahAset" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
					<th>ID ASET</th>
						<th>NAMA ASET</th>
						<th class="text-center">LOKASI</th>
						<th class="text-center">KONDISI</th>
						<th class="text-center">JUMLAH</th>
						<th class="text-center">UKURAN</th>
						<th class="text-center">NILAI</th>
						<th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_tetaps as $at)
                    <tr>
						<td>{{ $at->id_Aset }}</td>
						<td>{{ $at->nama_Aset }}</td>
						<td class="text-center">{{ $at->lokasi }}</td>
						<td class="text-center">{{ $at->kondisi }}</td>
						<td class="text-center">{{ $at->jumlah }}</td>
						<td class="text-center">{{ $at->ukuran }}</td>
						<td class="text-center">Rp{{ $at->nilai_ekonomi }}</td>
						<td>
							<a href="/AsetTetap/edit/{{$at->id_Aset}}" class="badge badge-warning">Edit</a>
							<a href="/AsetTetap/hapus/{{$at->id_Aset}}" class="badge badge-danger">Hapus</a>
						</td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection