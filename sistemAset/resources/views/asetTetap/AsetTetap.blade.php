@extends('base2')
@section('pageView')
@section('title', 'Daftar Aset')

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
        <span>Daftar Aset Tetap</span>
    </div>
    
    <div class="row">
        <a class="btnAdd" href="/tambahAset" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div>
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center">ID Aset</th>
                        <th class="text-left">Nama Aset</th>
                        <th class="text-center">Lokasi</th>
                        <th class="text-center">Kondisi</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Ukuran</th>
                        <th class="text-right">Nilai Ekonomi</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_tetaps as $at)
                    <tr>
						<td class="text-center">{{ $at->id_Aset }}</td>
						<td class="text-left">{{ $at->nama_Aset }}</td>
						<td class="text-center">{{ $at->lokasi }}</td>
						<td class="text-center">{{ $at->kondisi }}</td>
						<td class="text-center">{{ $at->jumlah }}</td>
						<td class="text-center">{{ $at->ukuran }}</td>
                        <td class="text-right">Rp{{ number_format($at->nilai_ekonomi, 0, ',', '.') }}</td>
							<td>
                            <a class="btnEdit" href="/AsetTetap/edit/{{$at->id_Aset}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/AsetTetap/hapus/{{$at->id_Aset}}"> 
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