@extends('base2')
@section('pageView')
@section('title', 'Daftar Aset Jual Beli')

<div class="pageSection">
    <div class="pageTitle">
        <span>Daftar Aset Jual Beli</span>
    </div>

    <div class="row"> 
        <a class="btnAdd" href="/tambahAsetJualBeli" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div>
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
						<th class="text-center">ID Aset</th>
						<th class="text-left" >Nama Aset</th>
						<th class="text-center">Stok</th>
						<th class="text-center">Nilai Ekonomi</th>
						<th class="text-center">Lokasi Jual</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_jualbeli as $aj)
                    <tr>
						<td class="text-center">{{ $aj->id_aset }}</td>
						<td>{{ $aj->nama_aset }}</td>
						<td class="text-center">{{ $aj->stok }}</td>
                        <td class="text-right">Rp{{ number_format($aj->nilai_ekonomi, 0, ',', '.') }}</td>
						<td class="text-center">{{ $aj->lokasi_jual }}</td>
						<td>
                            <a class="btnEdit" href="/aset_jual_beli/edit/{{$aj->id_aset}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/aset_jual_beli/hapus/{{$aj->id_aset}}"> 
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