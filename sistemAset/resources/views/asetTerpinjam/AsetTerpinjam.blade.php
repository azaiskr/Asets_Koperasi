@extends('base2')
@section('pageView')
@section('title', 'Daftar Aset Terpinjam')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="pageSection">
    <div class="pageTitle">
        <span>Daftar Aset Terpinjam <</span>
    </div>

    <div class="row">
        <a class="btnAdd" href="/tambahTerpinjam" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div>
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
						<th class="text-center">ID Aset</th>
						<th class="text-left">Nama Aset</th>
						<th class="text-left">Nama Peminjam</th>
						<th class="text-center">Jumlah</th>
						<th class="text-center">Tanggal Peminjaman</th>
						<th class="text-center">Jatuh Tempo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_terpinjam as $at)
                    <tr>
						<td class="text-center">{{ $at->id_aset }}</td>
						<td class="text-left">{{ $at->nama_aset }}</td>
						<td class="text-left">{{ $at->nama_peminjam }}</td>
						<td class="text-center">{{ $at->jumlah_pinjaman }}</td>
						<td class="text-center">{{ $at->tanggal_pinjaman }}</td>
						<td class="text-center">{{ $at->tanggal_jatuh_tempo }}</td>
						<td>
                            <a class="btnEdit" href="/AsetTerpinjam/edit/{{$at->id_aset}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/AsetTerpinjam/hapus/{{$at->id_aset}}"> 
                                <i class="bi bi-trash"></i>
                            </a>
						</td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection